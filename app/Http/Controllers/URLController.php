<?php

namespace Biqon\Http\Controllers;

use DB;
use Biqon\User;
use Biqon\Event;
use Biqon\Logurl;
use Biqon\Landing;
use Biqon\Dashboard;
use Biqon\Role_User;
use Biqon\DatosLanding;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class URLController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        $id = Auth::id();
        $role_user = Role_User::where('user_id', $id)->first();       
        return view('pages.urls',['path' => 'urls', 'role' => $role_user->role_id]);
    }

    public function uploadInfo(Request $request){
        $request->user()->authorizeRoles(['user', 'admin']);
        $id = Auth::id();
        $role_user = Role_User::where('user_id', $id)->first();       
        return view('pages.uploadInfo',['path' => 'uploadInfo', 'role' => $role_user->role_id]);
    }

    public function indexSinUrls(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        $id = Auth::id();
        $role_user = Role_User::where('user_id', $id)->first();       
        return view('pages.sinurls',['path' => 'sinurls', 'role' => $role_user->role_id]);
    }

    public function indexDashboard(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        $id = Auth::id();

        $iframe = Dashboard::where('user_id', $id)->first();                  
        $role_user = Role_User::where('user_id', $id)->first();      
        
        $landings = '';
        if($role_user->role_id == 1){
            $landings = Landing::all(); 
        }else{
            $users = User::where('id', $id)->first(); 
            $landings = Landing::whereIn('id', json_decode($users->landings))->get(); 
        }

        return view('pages.dashboard', ['path' => 'dashboard', 'role' => $role_user->role_id, 'landings' => $landings, 'ruts' => $this->getDataJson('rut'), 'phones' => $this->getDataJson('telefono')]);        
        
    }

    public function getDataJson($data){

        $id = Auth::id();
        $role_user = Role_User::where('user_id', $id)->first(); 

        if($role_user->role_id == '1'){
            $ids = 0;  
            $events = Event::all();           
        }else{
            $ids = Landing::select(DB::raw('id'))->where('client_id', $id)->get();
            $res = []; 
            foreach ($ids as $id) {
                $res[] = $id->id;
            }
            $events = Event::whereIn('landing_id', $res)->get();            
        }
        $dat = [];
        foreach ($events as $e) {
            if($e->json_datos){                
                $datos = json_decode($e->json_datos);    
                foreach ($datos as $key => $value) {
                    if(trim(strtolower($key)) == $data){
                        $dat[] = $value;
                    }
                }
            }
        }
        return ($dat); 

    }

    public function indexUploads(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        $id = Auth::id();
        $role_user = Role_User::where('user_id', $id)->first(); 
        $userInfo = User::where('id', $id)->first(); 

        if($role_user->role_id == 1){
            $landing = Landing::all();
        }else{
            $landing = Landing::whereIn('id', json_decode($userInfo->landings))->get();            
        }

        return view('pages.uploads', ['path' => 'uploads', 'user_id' => $id, 'landing' => $landing, 'role' => $role_user->role_id]);        
        
    }

    public function indexNewLanding(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        $id = Auth::id();
        $role_user = Role_User::where('user_id', $id)->first();    
        
        $users = User::all();        
        return view('pages.newlanding', ['path' => 'clients', 'user_id' => $id, 'role' => $role_user->role_id, 'users' => $users] );        
        
    }

    public function getDashboard($ids, $request){

        $byLanding = $request->input('byLanding'); 
        $byRut = $request->input('byRut'); 
        $byPhone = $request->input('byPhone'); 
        $startDate = $request->input('startDate'); 
        $startDate = str_replace('/', '-', $startDate );
        $startDate = date("Y-m-d", strtotime($startDate));
        $endDate = $request->input('endDate'); 
        $endDate = str_replace('/', '-', $endDate );
        $endDate = date("Y-m-d",strtotime($endDate."+ 1 day"));
        
        $dateReport = ['startDate' => $request->input('startDate'), 'endDate' => $request->input('endDate')];
        
        $where = '';
        $whereLandind = '';

        if($ids != 0){
            $whereLandind = " AND landings.id IN ($ids)";            
        }

        if($byLanding && $byLanding != ''){
            $ids = implode(',', $byLanding); 
            $whereLandind = " AND landings.id IN ($ids)";
        }

        $where .= $whereLandind;

        if($byRut && $byRut != ''){
            $byRut = implode('|', $byRut); 
            $where .= " AND events.json_datos RLIKE '$byRut'";
        }

        if($byPhone && $byPhone != ''){
            $byPhone = implode('|', $byPhone); 
            $where .= " AND events.json_datos RLIKE '$byPhone'";
        }

        $sql = "SELECT COUNT(events.name) as cantidadEventos, events.name as evento, COUNT(landings.name) as totalLandings, landings.name as landing, landings.url as url, users.name as client, landings.id as idlanding, events.json_datos as datos FROM landings LEFT JOIN events ON events.landing_id = landings.id  LEFT JOIN users ON users.id = landings.client_id WHERE events.created_at >= '$startDate' AND events.created_at <= '$endDate' $where  GROUP BY events.name, landings.id"; 

        $sql2 = "SELECT events.name as evento, landings.name as landing, landings.url as url, users.name as client, landings.id as idlanding, events.json_datos as datos, events.created_at as fecha FROM landings LEFT JOIN events ON events.landing_id = landings.id  LEFT JOIN users ON users.id = landings.client_id WHERE events.created_at >= '$startDate' AND events.created_at <= '$endDate' $where"; 
        
        $data = DB::select(DB::raw($sql));

        $totalVisitas  = 0;
        $totalFormularios  = 0;
        $totalEventos  = 0;
        $landings = [];
        $seriesDataForm=[]; 
        $seriesDataVisita=[]; 

        foreach ($data as $d) {
            if($d->evento == 'Formulario'){
                $totalFormularios =  $totalFormularios + $d->cantidadEventos;
                $cantXFormularios['cat'][] = $d->landing;
                $seriesDataForm[] = $d->cantidadEventos; 
            }else if($d->evento == 'Visita'){
                $totalVisitas =  $totalVisitas + $d->cantidadEventos;
                $cantXvisitas['cat'][] = $d->landing;
                $seriesDataVisita[] = $d->cantidadEventos; 
            }else{
                $totalEventos =  $totalEventos + $d->cantidadEventos;
            }


            $landings[] = json_encode(['name' => $d->landing, 'url' => $d->url, 'client' => $d->client]);           
        }       
       
        $landings= array_unique($landings); 
        $lan = [];
        $totalLandings = 0; 
        foreach ($landings as $l) {
            $lan[] = json_decode($l);
            $totalLandings++;
        }
        $cantXFormularios['series'] = ['name'=>'Formularios', 'data' => $seriesDataForm];
        $cantXvisitas['series'] = ['name'=>'Visitas', 'data' => $seriesDataVisita];


        $data2 = DB::select(DB::raw($sql2));
        $formularios = [];
        $eventos = [];
        $visitas = [];

        foreach ($data2 as $d) {
            if($d->evento == 'Formulario'){
                $formularios[] = ['name' => $d->landing,  'fecha' => $d->fecha, 'datos' => $d->datos];    
            }else if($d->evento == 'Visita'){
                $visitas[] = ['name' => $d->landing,  'fecha' => $d->fecha, 'datos' => $d->datos];                 
            }else{
                $eventos[] = ['name' => $d->landing,  'fecha' => $d->fecha, 'datos' => $d->datos, 'evento' => $d->evento];                   
            }
        }

        //LOG URL
        

        $id = Auth::id();
        $role_user = Role_User::where('user_id', $id)->first(); 
        $reportUrls = [];

        if($role_user->role_id == '1'){
            $logurl = Logurl::whereBetween('created_at', [$startDate, $endDate])->get();
        }else{
            $logurl = Logurl::where('userid', $id)->whereBetween('created_at', [$startDate, $endDate])->get();     
        }
        
        foreach ($logurl as $r) {
           $url = explode('?', $r->url);
           $datos = '';
           
           if(isset($url[1]) && $url[1] != null ){
                $datos = $url[1];
           }

           $reportUrls[] = [
            'shorturl' => 'http://bint.ml/'.$r->code,
            'url' => $url[0],
            'date' => $r->created_at,
            'data' => $this->getJSON($datos)
           ]; 
        }

        return ['totalLandings'=>$totalLandings, 'totalVisitas'=>$totalVisitas, 'totalEventos'=>$totalEventos,'totalFormularios'=>$totalFormularios, 'cantXvisitas' => $cantXvisitas, 'cantXFormularios' => $cantXFormularios, 'landings'=> $lan, 'formularios'=> $formularios, 'visitas'=> $visitas, 'eventos'=> $eventos, 'dateReport' => $dateReport, 'reportUrls' => $reportUrls]; 
       
    }

    public function getJSON($path){

        $data = [];

        if($path != '' && $path != null ){
            $partials = explode('&', $path);        
    
            foreach($partials as $p){
                $dataPartials = explode('=', $p);   
                $data[$dataPartials[0]] = $dataPartials[1];
            }
        }
        return $data;

    }


    public function getDataDashboard(Request $request){

        $id = Auth::id();                
        $role_user = Role_User::where('user_id', $id)->first(); 

        if($role_user->role_id == '1'){
            $ids = 0;        
            return  $this->getDashboard($ids, $request);       

        }else{
            $ids = User::select(DB::raw('landings'))
                              ->where('id', $id)->first();  
            return  $this->getDashboard(implode(',', json_decode($ids->landings)), $request);        
        }

    }

    public function getReport(Request $request){

        $id = Auth::id();                
        $role_user = Role_User::where('user_id', $id)->first(); 

        if($role_user->role_id == '1'){
            $ids = 0;        
            $data = $this->getDashboard($ids, $request);       

        }else{
            $ids = User::select(DB::raw('landings'))
                              ->where('id', $id)->first();  
            $data = $this->getDashboard(implode(',', json_decode($ids->landings)), $request);        
        }

        $file = rand('11111', '9999999');
        $path = 'storage/';

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Reporte del '. $data['dateReport']['startDate']. ' al '. $data['dateReport']['endDate']);
        $sheet->setCellValue('A2', 'Total Landings:');
        $sheet->setCellValue('B2', $data['totalLandings']);
        $sheet->setCellValue('A3', 'Total Visitas:');
        $sheet->setCellValue('B3', $data['totalVisitas']);
        $sheet->setCellValue('A4', 'Total Formularios:');
        $sheet->setCellValue('B4', $data['totalFormularios']);
        $sheet->setCellValue('A5', 'Total Eventos:');
        $sheet->setCellValue('B5', $data['totalEventos']);
       // $sheet->setCellValue('A6', 'Total URL:');
       // $sheet->setCellValue('B6', $data['totalUrl']);
        
        //LANDIGNS

        $landings = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Landings');
        $landings->setCellValue('A1', 'ID');
        $landings->setCellValue('B1', 'Nombre');
        $landings->setCellValue('C1', 'Cliente');
        $landings->setCellValue('D1', 'Url');

        $x = 2; 

        $lan = $data['landings'];

        foreach ($lan as $land) {
            $landings->setCellValue('A'.$x, $x-2);
            $landings->setCellValue('B'.$x, $land->name);
            $landings->setCellValue('C'.$x, $land->client);
            $landings->setCellValue('D'.$x, $land->url);
            $x++;
        }

        //VISITAS

        $visitas = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Visitas');
        $visitas->setCellValue('A1', 'ID');
        $visitas->setCellValue('B1', 'Landing');
        $visitas->setCellValue('C1', 'Fecha');
        $visitas->setCellValue('D1', 'Datos');
       

        $vis = $data['visitas'];
        
        for ($i=2; $i < count($vis) +2  ; $i++) { 
            $visitas->setCellValue('A'.$i, $i-2);
            $visitas->setCellValue('B'.$i, $vis[$i-2]['name']);
            $visitas->setCellValue('C'.$i, $vis[$i-2]['fecha']);
            $visitas->setCellValue('D'.$i, $vis[$i-2]['datos']);
        }


        //FORMULARIOS

        $formularios = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Formularios');
        $formularios->setCellValue('A1', 'ID');
        $formularios->setCellValue('B1', 'Landing');
        $formularios->setCellValue('C1', 'Fecha');
        $formularios->setCellValue('D1', 'Datos');

        $for = $data['formularios'];
        
        for ($i=2; $i < count($for) +2  ; $i++) { 
            $formularios->setCellValue('A'.$i, $i-2);
            $formularios->setCellValue('B'.$i, $for[$i-2]['name']);
            $formularios->setCellValue('C'.$i, $for[$i-2]['fecha']);
            $formularios->setCellValue('D'.$i, $for[$i-2]['datos']);
        }

        //EVENTOS

        $eventos = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'Eventos');
        $eventos->setCellValue('A1', 'ID');
        $eventos->setCellValue('B1', 'Evento');
        $eventos->setCellValue('C1', 'Landing');
        $eventos->setCellValue('D1', 'Fecha');
        $eventos->setCellValue('E1', 'Datos');

        
        $eve = $data['eventos'];
        
        for ($i=2; $i < count($eve) +2  ; $i++) { 
            $eventos->setCellValue('A'.$i, $i-2);
            $eventos->setCellValue('B'.$i, $eve[$i-2]['evento']);
            $eventos->setCellValue('C'.$i, $eve[$i-2]['name']);
            $eventos->setCellValue('D'.$i, $eve[$i-2]['fecha']);
            $eventos->setCellValue('E'.$i, $eve[$i-2]['datos']);
        }

        //URL

      /*  $urlcorta = new \PhpOffice\PhpSpreadsheet\Worksheet\Worksheet($spreadsheet, 'URLCorta');
        $urlcorta->setCellValue('A1', 'ID');
        $urlcorta->setCellValue('B1', 'URLCorta');
        $urlcorta->setCellValue('C1', 'URL');
        $urlcorta->setCellValue('D1', 'Fecha');
        $urlcorta->setCellValue('E1', 'Datos');

        
        $eve = $data['urlcorta'];
        
        for ($i=2; $i < count($eve) +2  ; $i++) { 
            $urlcorta->setCellValue('A'.$i, $i-2);
            $urlcorta->setCellValue('B'.$i, $eve[$i-2]['urlcorta']);
            $urlcorta->setCellValue('C'.$i, $eve[$i-2]['url']);
            $urlcorta->setCellValue('D'.$i, $eve[$i-2]['fecha']);
            $urlcorta->setCellValue('E'.$i, $eve[$i-2]['datos']);
        }*/



        $spreadsheet->addSheet($landings, 2);
        $spreadsheet->addSheet($visitas, 3);
        $spreadsheet->addSheet($formularios, 4);
        $spreadsheet->addSheet($eventos, 5);
       // $spreadsheet->addSheet($urlcorta, 6);


        $writer = new Xlsx($spreadsheet);

        
        $file = 'report_'.date('Y-m-d').'_'.$file.'.Xlsx';
        $writer->save($path.$file);
       
        return array('status' => 200, 'data' => $file);

    }

    

    public function uploadData(Request $request){
        
        $file = $request->file('file')->store('public');
        $landing_id = $request->input('landing_id');

        $objExcel = $this->getDataToExcel($file);
        $dataExcel = $objExcel->getActiveSheet()->toArray(null, true, true, true);

        $letters = $this->getArrayLetters(); 

        $items = [];
        for ($i=0; $i < count($letters) ; $i++) { 
            if(!isset($dataExcel[1][$letters[$i]])){
                break;
            }
            $items[$letters[$i]] = $dataExcel[1][$letters[$i]]; 
        }                             
        DatosLanding::where('landing_id', $landing_id)->delete();
        for ($i=2; $i < count($dataExcel)+1; $i++) {                 
            $datosLanding = new DatosLanding;
            foreach ($items as $letter => $col) {                
                $datosLanding[$col] = $dataExcel[$i][$letter];
            }

            $datosLanding->landing_id = $landing_id;
            $datosLanding->save();            
        }

        return array('code' => 200, 'msg' => 'Datos Ingresados');
    }


    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
