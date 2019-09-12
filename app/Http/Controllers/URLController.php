<?php

namespace Biqon\Http\Controllers;

use Illuminate\Http\Request;
use Biqon\Dashboard;
use Biqon\Landing;
use Biqon\Role_User;
use Biqon\User;
use Biqon\Event;
use Biqon\DatosLanding;
use DB;
use Illuminate\Support\Facades\Auth;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\IOFactory;

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
        }

        $landings = '';
        if($role_user->role_id == 1){
            $landings = Landing::all(); 
        }



        return view('pages.dashboard', ['path' => 'dashboard', 'iframe' => $iframe->url, 'role' => $role_user->role_id, 'landings' => $landings, 'ruts' => $this->getDataJson('rut'), 'phones' => $this->getDataJson('telefono')]);        
        
    }

    public function getDataJson($data){

        $id = Auth::id();
        $role_user = Role_User::where('user_id', $id)->first(); 

        if($role_user->role_id == '1'){
            $ids = 0;  
            $events = Event::all();           
        }else{
            $ids = Landing::select(DB::raw('id'))
                              ->where('client_id', $id)->get();
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
        $landing = Landing::all();
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
        $endDate = date("Y-m-d", strtotime($endDate));

        
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

        $sql = "SELECT COUNT(events.name) as cantidadEventos, events.name as evento, landings.name as landing, landings.url as url, users.name as client, landings.id as idlanding, (SELECT COUNT(id) FROM landings) as totalLandings, events.json_datos as datos FROM landings LEFT JOIN events ON events.landing_id = landings.id  LEFT JOIN users ON users.id = landings.client_id WHERE events.created_at >= '$startDate' AND events.created_at <= '$endDate' $where  GROUP BY events.name, landings.id"; 

        $sql2 = "SELECT events.name as evento, landings.name as landing, landings.url as url, users.name as client, landings.id as idlanding, events.json_datos as datos, events.created_at as fecha FROM landings LEFT JOIN events ON events.landing_id = landings.id  LEFT JOIN users ON users.id = landings.client_id WHERE events.created_at >= '$startDate' AND events.created_at <= '$endDate' $where"; 
        
        //return $sql;
        $data = DB::select(DB::raw($sql));

        $totalLandings  = 0;
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
            $totalLandings = $d->totalLandings;

            $landings[] = json_encode(['name' => $d->landing, 'url' => $d->url, 'client' => $d->client]);           
        }       
       
        $landings= array_unique($landings); 
        $lan = [];
        foreach ($landings as $l) {
            $lan[] = json_decode($l);
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
       

        return ['totalLandings'=>$totalLandings, 'totalVisitas'=>$totalVisitas, 'totalEventos'=>$totalEventos,'totalFormularios'=>$totalFormularios, 'cantXvisitas' => $cantXvisitas, 'cantXFormularios' => $cantXFormularios, 'landings'=> $lan, 'formularios'=> $formularios, 'visitas'=> $visitas, 'eventos'=> $eventos]; 

       
    }


    public function getDataDashboard(Request $request){

        $id = Auth::id();                
        $role_user = Role_User::where('user_id', $id)->first(); 

        if($role_user->role_id == '1'){
            $ids = 0;             
        }else{
            $ids = Landing::select(DB::raw('id'))
                              ->where('client_id', $id)->get();
            $res = []; 
            foreach ($ids as $id) {
                $res[] = $id->id;
            }
            $ids = implode(',', $res); 
        }

       return  $this->getDashboard($ids, $request); 
       

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
