<?php

namespace Biqon\Http\Controllers;

use Illuminate\Http\Request;

class CoreController extends Controller
{
    
    public function correctNumbers($numbers){
        if(is_array($numbers)){            
            $num = array();                 
            for ($i=0; $i < count($numbers); $i++) {
                $num[$i] = trim($this->setNumber($numbers[$i]));    
            }
            return $num;
        }else{

            return $this->setNumber($numbers); 
        }        	
    }

    public function setNumber($number){
        $car = array("-", ".", "+");
        $number = str_replace($car, "", $number);  
        switch (strlen($number)) {
            case 11:
                    $number = '+'.$number;
                    break;
            case 9:
                    $number = '+56'.$number;   		
                    break;
            default:
                //$numero = false;
                break;
        } 
        return $number;
    }

    //numbers and rut is array
    public function detectErrors($numbers, $message, $rut=false){

        $car = array("-", ".", "+");
        $res = array();

        for ($i=0; $i < count($numbers); $i++) { 
            
            $number = str_replace($car, "", $numbers[$i]);

            if($rut !== false){
                $rut = str_replace($car, "", $rut[$i]);
            
                //Character RUT
                $amountCharacter = strlen($rut);
                if($amountCharacter > 10 ||  $amountCharacter < 7){            
                    $res[] = 'La cantidad de dígitos del '.$rut.' es incorrecta';             
                }
            }

            //Characters Phone        
            $amountCharacter = strlen($number);	
            if($amountCharacter > 11 || $amountCharacter < 9 || $amountCharacter == 8 || $amountCharacter == 10){
                $res[] = 'La cantidad de dígitos del teléfono '.$number.' es incorrecta';			
            }
    
            //Code Country and Number static
            if($amountCharacter == 11){
                $firstTwo = substr($number, 0, 2);
                if($firstTwo != "56" && $firstTwo != "51"){
                    $res[] = 'Número de Teléfono o Código de pais Incorrecto en el número: '.$number.'';  
                }
                $static = substr($number, 2, 2);
                if($static == "92"){
                    $res[] = 'El número '.$number.' pertenece a un número fijo, no se enviará';
                }
            }
    
            if($amountCharacter == 9){
                $firstTwo = substr($number, 0, 2);
                if($firstTwo == "92"){
                    $res[] = 'El número '.$number.' pertenece a un número fijo, no se enviará';                
                }
    
                $primerDig = substr($number, 0, 1);
                if($firstTwo != "9"){
                    $res[] = 'El número '.$number.' no pertenece a un celular, no se enviará';                
                }
            }

        }


        //length of messages
        $pos = strpos($message, '(url)');       
        if ($pos === false) {
            if(strlen($message)>160){
                $res[] = 'El mensaje exede los 160 caracteres permitidos';            
            }
        }else{
            if(strlen($message)>130){
                $res[] = 'El mensaje exede los 160 caracteres permitidos';            
            }
        }

        //characters not allowed

        if(strpos($message, '&')){
            $res[] = 'El caracter & no está permitido, se eliminará';                       			
        }      

        //Comprobar caracteres que cuentan como 2 espacios en el mensaje
        $dobleChar = array('[', ']', '{', '}', '|', "\\", "~", "^");
        for ($j=0; $j <count($dobleChar); $j++) { 
            if(strpos($message, $dobleChar[$j])){
                $res[] = 'El caracter '.$dobleChar[$j].' ocupa dos espacios, se omitirá un caracter al final';                 
            }
        }

        if(count($res)>0){
            return $res; 
        }else{
            return false;
        }


    }



    public function sendUnitMessages(Request $request){
        

        $quantity = count($request->all());

        if(isset($request['landing'])){
            $quantity--; 
        }

        if(isset($request['skip'])){
            $quantity--; 
        }
        
        $numbers = array(); 

        for($i=1; $i<$quantity-1; $i++) { 
            $numbers[] = $this->correctNumbers($request['phone_'.$i]);  
        }

        $errors = $this->detectErrors($numbers, $request['message']); 
        if($errors!==false && !isset($request['skip'])){
            return array('status' => '100', 'data' => $errors);
        }

        return array('status' => '200', 'data' => 'ok');
        

    }
    




}
