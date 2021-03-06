<?php

namespace Biqon\Http\Controllers;

use Biqon\Url;
use Biqon\Logurl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Exception;

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

    public function getNextLetterByObj($objExcel){
        $letters = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J','K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');            

        for ($i=0; $i < count($letters); $i++) { 
            
            if (!isset($objExcel[1][$letters[$i]])){
                return $letters[$i];
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

        $user = Auth::user();

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
            
            $nextLetter = $this->getNextLetterByObj($dataExcel);  
            
            if($i == 2){
                $objExcel->getActiveSheet()->setCellValue($nextLetter.'1', 'Mensaje');
            }            

            // return $url;
            $name = $request['company']; 
            $url = $this->saveURL($url, $name, $user->id); 


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


    public function getWithoutURLs(Request $request){

        $user = Auth::user();

        $objExcel = $this->getDataToExcel($request['file']);
        $dataExcel = $objExcel->getActiveSheet()->toArray(null, true, true, true);

        $items = $request['items']; 
        $itemsUrls = $request['itemsUrls']; 
        $message = $request['mensaje'];
        $keyURL = 'A'; 

        foreach ($items as $key2 => $value) {  

            //  $keyURL = $key2; 
            // break; 

            if($value == 'URL' || $value == 'url' || $value == 'Url'){
                $keyURL = $key2; 
                break; 
            }
            
                
        }
       
               
        for ($i=2; $i < count($dataExcel)+1; $i++) {    


            $dataURL = array();    
            $lastKey = "";       
            $url = trim($dataExcel[$i][$keyURL]);   

            if( is_array($itemsUrls) || is_object($itemsUrls) ){
                foreach ($itemsUrls as $key => $value) {
                    $lastKey = $key;          
                    if(trim($dataExcel[$i][$key]) == ''){
                        break;
                    }
                    $dataURL[trim($value)] = trim($dataExcel[$i][$key]);   
                    
                }    
                 $url = $url.$this->passToURL($dataURL);              
               // $url = x|x.$this->passToURL($dataURL);    
            }            
            
             
            $url = $this->saveURL($url, $request['name'], $user->id);
            $msj = str_replace('(url)', $url, $message); 

            $nextLetter = $this->getNextLetterByObj($dataExcel);  
            
            if($i == 2){
                $objExcel->getActiveSheet()->setCellValue($nextLetter.'1', 'Mensaje');
            }                               
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


    public function saveURL($url, $name, $userid){

       if($name == null || $name == ''){
            $firstLetter = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,1);
            $lastLetter = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,1);            
        }else{
            $firstLetter =  $name[0]; 
            $lastLetter =substr($name, -1);
        }

        $code = $firstLetter.$lastLetter.$this->generarCodigo(5);           

        $flight = new Url;
        $flight->url = $url;
        $flight->code = $code;
        $flight->userid = $userid;
        $flight->save();

        if($name == null || $name == ''){
            return 'bint.ml/'.$code;        
        }else{
            return 'bint.ml/'.$name.'/'.$code;
        }

  


    }

    public function getUrlByCode(Request $request){
        $flights = Url::where('code', $request->id)->first();
        $u = explode('?', $flights->url);
        $params = explode('&', $u[1]);
        $obj = [];
        for ($i=0; $i <count($params) ; $i++) { 
            $item = explode('=', $params[$i]);
            $obj[strtolower($item[0])] = $item[1];
        }
        return $obj;
    }

    
    public function routes($company, $code){   
                
        $flights = Url::where('code', $code)->first();

        
                 
        if($flights == ''){
            return 'No se puede encontrar la página'; 
        }else{
            $logurl = new Logurl;
            $logurl->url = $flights->url;
            $logurl->code = $code;
            $logurl->userid = $flights->userid;
            $logurl->save();

            //ONLY PROCOLLET LANDING

            $pos = strpos($flights->url, 'uss-procollect');

            if ($pos !== false) {            
            
                $u = explode('?', $flights->url);
                // $message = $u[1];
                // $key = hex2bin('000102030405060708090a0b0c0d0e0f101112131415161718191a1b1c1d1e1f');
                // $encrypted = $this->encrypt($message, $key);
                $flights->url = $u[0].'?id='. $code;   

                return redirect($flights->url);

            }

            return redirect($flights->url);
        }
        
    }

    public function routes2($code){   
                
        $flights = Url::where('code', $code)->first();
                 
        if($flights == ''){
            return 'No se puede encontrar la página'; 
        }else{
            $logurl = new Logurl;
            $logurl->url = $flights->url;
            $logurl->code = $code;
            $logurl->userid = $flights->userid;
            $logurl->save();
            return redirect($flights->url);
        }
        

        
    }



    // public function encrypt ($q) {
    //     $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    //     $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    //     return( $qEncoded );
    // }

    // public function decrypt ($q) {
    //     $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    //     $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    //     return( $qDecoded );
    // }

    const METHOD = 'aes-256-cbc';

    public static function encrypt($message, $key)
    {
        if (mb_strlen($key, '8bit') !== 32) {
            throw new Exception("Needs a 256-bit key!");
        }
        $ivsize = openssl_cipher_iv_length(self::METHOD);
        $iv = openssl_random_pseudo_bytes($ivsize);

        $ciphertext = openssl_encrypt(
            $message,
            self::METHOD,
            $key,
            OPENSSL_RAW_DATA,
            $iv
        );

        return $iv . $ciphertext;
    }

    public static function decrypt($message, $key)
    {
        if (mb_strlen($key, '8bit') !== 32) {
            throw new Exception("Needs a 256-bit key!");
        }
        $ivsize = openssl_cipher_iv_length(self::METHOD);
        $iv = mb_substr($message, 0, $ivsize, '8bit');
        $ciphertext = mb_substr($message, $ivsize, null, '8bit');

        return openssl_decrypt(
            $ciphertext,
            self::METHOD,
            $key,
            OPENSSL_RAW_DATA,
            $iv
        );
    }
    


    


}
