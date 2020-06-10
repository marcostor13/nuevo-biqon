<?php

namespace Biqon\Http\Controllers;

use Illuminate\Http\Request;
use Google\Cloud\BigQuery\BigQueryClient;
use Google\Cloud\Core\ExponentialBackoff;



class GoogleController extends Controller
{

    public function uploadDataBigQuery(Request $request){
        

        $pos = strpos($request->pathname, 'bint'); 
        if ($pos === false) {
            $keyPath = 'C:\Marcos\MT\Proyectos\NUevo biqon\bigquery\bigquery.json';
        } else {
            $keyPath = '/var/www/html/bigquery.json';
        }

        $bigQuery = new BigQueryClient([
            'projectId' => 'inspired-data-227704',
            'keyFilePath' => $keyPath,
            ]);

        // Get an instance of a previously created table.
        $dataset = $bigQuery->dataset('biqon');
        $table = $dataset->table('biqon_info');
        
        $file = $request->file('file')->store('public');
        $objExcel = $this->getDataToExcel($file);
        $dataExcel = $objExcel->getActiveSheet()->toArray(null, true, true, true);
        $letters = $this->getArrayLetters(); 

        $items = [];
        $rows = [];

        for ($i=0; $i < count($letters) ; $i++) { 
            if(!isset($dataExcel[1][$letters[$i]])){
                break;
            }
            $items[$letters[$i]] = strtoupper($dataExcel[1][$letters[$i]]); 
        }                             
      
        for ($i=2; $i < count($dataExcel)+1; $i++) {                 
            foreach ($items as $letter => $col) {                
                $rows[$i-2]['data'][$col] = $dataExcel[$i][$letter];
            }         
        }

        $insertResponse = $table->insertRows($rows);
        if (!$insertResponse->isSuccessful()) {
            foreach ($insertResponse->failedRows() as $row) {
                print_r($row['rowData']);

                foreach ($row['errors'] as $error) {
                    echo $error['reason'] . ': ' . $error['message'] . PHP_EOL;
                }
            }
        }

        return array('code' => 200, 'data' => $rows);
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

        $file = str_replace("public/", "", $file);      
        
        
        $reader->setReadDataOnly(true);
        $spreadsheet = $reader->load($path.$file);
        // $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
        
        return $spreadsheet;

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


    public function getQueryBigquery(Request $request){

        $pos = strpos($request->pathname, 'bint'); 
        if ($pos === false) {
            $keyPath = 'C:\Marcos\MT\Proyectos\NUevo biqon\bigquery\bigquery.json';
        } else {
            $keyPath = '/var/www/html/bigquery.json';
        }

        $projectId = 'inspired-data-227704';
        //$query = 'SELECT id, view_count FROM `bigquery-public-data.stackoverflow.posts_questions`';       

        $conditions = []; 

        if($request->rut && $request->rut != ''){
            $conditions[] = "RUT LIKE '%$request->rut%'"; 
        }

        if($request->rutMayorA && $request->rutMayorA != ''){
            $conditions[] = "CAST(RUT AS NUMERIC) > $request->rutMayorA"; 
        }

        if($request->rutMenorA && $request->rutMenorA != ''){
            $conditions[] = "CAST(RUT AS NUMERIC) < $request->rutMenorA"; 
        }

        if($request->comuna && $request->comuna != ''){
            $conditions[] = "COMUNA LIKE '%$request->comuna%'"; 
        }

        if($request->direccion && $request->comuna != ''){
            $conditions[] = "DIRECCION LIKE '%$request->direccion%'"; 
        }

        if($request->telefono){
            $conditions[] = "TELEFONO LIKE '%$request->telefono%'"; 
        }

        if($request->cod_area){
            $conditions[] = "COD_AREA LIKE '%$request->cod_area%'"; 
        }


        $query = 'SELECT * FROM `inspired-data-227704.biqon.biqon_info`';

        if(count($conditions) > 0){
            $query .= ' WHERE '.implode(' AND ', $conditions);      
        }      

        $bigQuery = new BigQueryClient([
            'projectId' => $projectId,
            'keyFilePath' => $keyPath,
        ]);
        // $jobConfig = $bigQuery->query($query);
        // $job = $bigQuery->startQuery($jobConfig);

        

        $queryJobConfig = $bigQuery->query($query);
        $queryResults = $bigQuery->runQuery($queryJobConfig);

        return $queryResults;

        foreach ($queryResults as $row) {
            print_r($row);
        }



        // // Do something with the BigQuery API $response data
        // print_r($response);

        // $queryJobConfig = $bigQuery->query($query);

        

        // $queryResults = $bigQuery->runQuery($queryJobConfig);

        // sleep(5);

        // return $queryResults; 

        // foreach ($queryResults as $row) {
        //     echo $row['RUT'];
        // }


    }


}
