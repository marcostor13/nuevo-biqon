<?php

namespace Biqon\Http\Controllers;

use Biqon\Url;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\IOFactory;

class fileController extends Controller
{
    public function uploadFile(Request $request){

        $file = $request->file('file')->store('public');
        return $file;

    }

    public function getArrayLetters(){
        return array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J','K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
    }

    public function getNextLetter($letter){
        $letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J','K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

        for ($i=0; $i < count($letters); $i++) { 
            if($letters[$i] == $letter){
                return $letters[$i+1];
            }
        }

    }

    public function getItemsExcel(Request $request){

        $file = $request['file'];
        $path = 'storage/';
        $ext = explode('.', $file);
        $ext = $ext[count($ext)-1];

        if(strtolower($ext) == 'xlsx'){
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }else if(strtolower($ext) == 'xls'){
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        }else{
            return array('status' => 100, 'message' => 'Extensión incorrecta');
        }
        
        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load($path.$file);
        $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
        
        $letters = $this->getArrayLetters(); 
        $items = array(); 
        
        for ($i=0; $i < count($letters) ; $i++) { 
            if(!isset($sheetData[1][$letters[$i]])){
                break;
            }
            $items[$letters[$i]] = $sheetData[1][$letters[$i]]; 
        }

        return array('status' => 200, 'data' => $items);

    }

    public function getCantItemsExcel($file){

        $path = 'storage/';
        $ext = explode('.', $file);
        $ext = $ext[count($ext)-1];

        if(strtolower($ext) == 'xlsx'){
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }else if(strtolower($ext) == 'xls'){
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        }else{
            return array('status' => 100, 'message' => 'Extensión incorrecta');
        }
        
        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load($path.$file);
        $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
        
        $letters = $this->getArrayLetters(); 
        $items = array(); 
        
        for ($i=0; $i < count($letters) ; $i++) { 
            if(!isset($sheetData[1][$letters[$i]])){
                break;
            }
            $items[$letters[$i]] = $sheetData[1][$letters[$i]]; 
        }

        return count($items);

    }


    public function getLatestColumn($file){

        $countItems = $this->getCantItemsExcel($file);
        $letters = $this->getArrayLetters();
        $keyLatest = $letters[$countItems+4];
        return $keyLatest;

    }


    public function passToURL($obj){

        $items = ''; 

        foreach ($obj as $key => $value) {
            $items .= '&'.$key.'='.$value;
        }

        return '?'.substr($items, 1);

    }

    public function getURLs(Request $request){

        $objExcel = $this->getDataToExcel($request['file']);
        $dataExcel = $objExcel->getActiveSheet()->toArray(null, true, true, true);

        $items = $request['items']; 
        $landing = $request['landing']; 
        $message = $request['mensaje'];
        $endKey = $this->getLatestColumn($request['file']); 
        
        // return count($dataExcel);
               
        for ($i=2; $i < count($dataExcel)+1; $i++) { 
            
            $dataURL = array(); 
            
            if($items == '' || count($items) == 0){
                $url = $landing;
            }else{
                foreach ($items as $key => $value) {

                    if(trim($dataExcel[$i][$key]) == ''){
                        break;
                    }

                    $dataURL[trim($value)] = trim($dataExcel[$i][$key]);                
                }
                $url = $landing.$this->passToURL($dataURL);
            }
            
            $nextLetter = $this->getNextLetter($key);  
            
            if($i == 2){
                $objExcel->getActiveSheet()->setCellValue($nextLetter.'1', 'Mensaje');
            }            

            // return $url;
            $name = $request['company']; 
            $url = $this->saveURL($url, $name); 


            $msj = str_replace('(url)', $url, $message); 

            $objExcel->getActiveSheet()->setCellValue($nextLetter.$i, $msj);

        }

        $file = $request['file'];
        $path = 'storage/';
        $ext = explode('.', $file);
        $ext = $ext[count($ext)-1];

        if(strtolower($ext) == 'xlsx'){
            $writer = new Xlsx($objExcel);
        }else if(strtolower($ext) == 'xls'){
            $writer = new Xls($objExcel);
        }

        $file = 'new_'.$file;
        $writer->save($path.$file);
       
        return array('status' => 200, 'data' => $file);
    }


    public function getDataToExcel($file){

        $path = 'storage/';
        $ext = explode('.', $file);
        $ext = $ext[count($ext)-1];

        if(strtolower($ext) == 'xlsx'){
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }else if(strtolower($ext) == 'xls'){
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        }
        
        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load($path.$file);
        // $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
        
        return $spreadsheet;

    }

    public function shortenerURL($url){

        $curl = curl_init();
        

        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://tinyurl.com/api-create.php?url='.urlencode($url),
            CURLOPT_USERAGENT => 'Biqon'
        ]);

        $resp = curl_exec($curl);
        curl_close($curl);

        return $resp;

    }

    public function shortenerURL2($url){

        $curl = curl_init();        

        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://url-shortener-service.p.rapidapi.com/shorten?url='.urlencode($url),
            CURLOPT_USERAGENT => 'Biqon',
            CURLOPT_HTTPHEADER, array(
                "X-RapidAPI-Host: url-shortener-service.p.rapidapi.com",
                "X-RapidAPI-Key: 0ed620fd79msh7c0fce2990d9248p161ecdjsn616b50a5e0c7"
            ),
            CURLOPT_POST, true
        ]);

        $resp = curl_exec($curl);
        curl_close($curl);

        return $resp;

    }

    public function generarCodigo($longitud) {
        $key = '';
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
        $max = strlen($pattern)-1;
        for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
        return $key;
    }


    public function saveURL($url, $name){

        $code = $this->generarCodigo(5); 

        $flight = new Url;
        $flight->url = $url;
        $flight->code = $code;
        $flight->save();

        return 'http://localhost:8000/'.$name.'/'.$code;


    }


    public function routes($company, $code){        
        $flights = Url::where('code', $code)->first();         
        if($flights == ''){
            return 'No existe esta página'; 
        }else{
            return redirect($flights->url);
        }
        
    }

    


    


}
