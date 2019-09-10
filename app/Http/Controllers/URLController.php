<?php

namespace Biqon\Http\Controllers;

use Illuminate\Http\Request;
use Biqon\Dashboard;
use Biqon\Landing;
use Biqon\Role_User;
use Biqon\User;
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

        if($role_user->role_id == '1'){
            $ids = 0;             
        }else{
            $ids = Landing::select(DB::raw('id'))
                              ->where('client_id', 10)->get();
            $res = []; 
            foreach ($ids as $id) {
                $res[] = $id->id;
            }
            $ids = implode(',', $res); 
        }

        //return $this->getDashboard($ids);

        return view('pages.dashboard', ['path' => 'dashboard', 'iframe' => $iframe->url, 'role' => $role_user->role_id , 'info'=> $this->getDashboard($ids)]);        
        
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

    public function getDashboard($ids){

        if($ids == 0){
            $totalLandings = DB::table('landings')   
                    ->select(DB::raw('count(landings.id) as totalLandings'))                   
                    ->first();
            $totalLandings = $totalLandings->totalLandings;

            $totalVisitas = DB::table('events')   
                    ->select(DB::raw('count(id) as totalVisitas'))            
                    ->where('name','Visita')        
                    ->first();
            $totalVisitas = $totalVisitas->totalVisitas;

            $totalFormularios = DB::table('events')   
                    ->select(DB::raw('count(id) as totalFormularios'))    
                    ->where('name','Formulario')   
                    ->first();
            $totalFormularios = $totalFormularios->totalFormularios;

            $totalEventos = DB::table('events')   
                    ->select(DB::raw('count(id) as totalEventos'))    
                    ->where('name','<>','Formulario')   
                    ->where('name','<>','Visita')   
                    ->first();
            $totalEventos = $totalEventos->totalEventos;


            //CATNTIDAD DE VISITAS CUADRO

            $data = DB::table('landings')
                    ->select(DB::raw('landings.name as name, count(events.id) as totalVisitas'))
                    ->leftjoin('events', 'events.landing_id', '=', 'landings.id')
                    ->where('events.name','Visita')        
                    ->groupby('landings.name') 
                    ->get();

            $cantXvisitas = [];

            foreach ($data as $d) {
                $cantXvisitas['cat'][] = $d->name;             
                $seriesData[] = $d->totalVisitas; 
            }
            $cantXvisitas['series'] = ['name'=>'Visitas', 'data' => $seriesData];

            //CANTIDAD DE FORMULARIOS CUADRO 
            $data = DB::table('landings')
                    ->select(DB::raw('landings.name as name, count(events.id) as totalFormulario'))
                    ->leftjoin('events', 'events.landing_id', '=', 'landings.id')
                    ->where('events.name','Formulario')        
                    ->groupby('landings.name') 
                    ->get();

            $cantXFormularios = [];

            if(count($data) > 0){
                foreach ($data as $d) {
                    $cantXFormularios['cat'][] = $d->name;             
                    $seriesData2[] = $d->totalFormulario; 
                }
            }else{
                $cantXFormularios['cat'][] = '';        
                $seriesData2 = 0; 
            }

            $cantXFormularios['series'] = ['name'=>'Formularios', 'data' => $seriesData2];

        }else{

            $totalLandings = DB::table('events')   
                    ->select(DB::raw('count(id) as totalLandings'))                   
                    ->where('landing_id', 'in', $ids)
                    ->where('name','Visita')    
                    ->first();
            $totalLandings = $totalLandings->totalLandings;

            $totalFormularios = DB::table('events')   
                    ->select(DB::raw('count(id) as totalFormularios'))                       
                    ->where('landing_id', 'in', $ids) 
                    ->where('name','Formulario')   
                    ->first();
            $totalFormularios = $totalFormularios->totalFormularios;

            $totalEventos = DB::table('events')   
                    ->select(DB::raw('count(id) as totalFormularios'))    
                    ->where('landing_id', 'in', $ids) 
                    ->where('name','<>','Formulario')   
                    ->where('name','<>','Visita')   
                    ->first();
            $totalEventos = $totalEventos->totalEventos;

            $data = DB::table('landings')
                    ->select(DB::raw('landings.name as name, count(events.id) as totalVisitas'))
                    ->leftjoin('events', 'events.landing_id', '=', 'landings.id')
                    ->where('events.name','Visita')
                    ->where('landings.id', 'in', $ids)        
                    ->groupby('landings.name') 
                    ->get();
           
            $cantXvisitas = [];

            foreach ($data as $d) {
                $cantXvisitas['cat'][] = $d->name;             
                $seriesData[] = $d->totalVisitas; 
            }
            $cantXvisitas['series'] = ['name'=>'Visitas', 'data' => $seriesData];

            //CANTIDAD DE FORMULARIOS CUADRO 
            $data = DB::table('landings')
                    ->select(DB::raw('landings.name as name, count(events.id) as totalFormulario'))
                    ->leftjoin('events', 'events.landing_id', '=', 'landings.id')
                    ->where('events.name','Formulario')   
                    ->where('landings.id', 'in', $ids)     
                    ->groupby('landings.name') 
                    ->get();

            $cantXFormularios = [];

            foreach ($data as $d) {
                $cantXFormularios['cat'][] = $d->name;             
                $seriesData[] = $d->totalFormulario; 
            }
            $cantXFormularios['series'] = ['name'=>'Formularios', 'data' => $seriesData];

            
        }
       

        return ['totalLandings'=>$totalLandings, 'totalVisitas'=>$totalVisitas, 'totalEventos'=>$totalEventos,'totalFormularios'=>$totalFormularios, 'cantXvisitas' => $cantXvisitas, 'cantXFormularios' => $cantXFormularios]; 

       
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
        for ($i=2; $i < count($dataExcel)+1; $i++) {            
            
            DatosLanding::where('landing_id', $landing_id)->delete();
            
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
