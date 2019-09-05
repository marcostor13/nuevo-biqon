<?php

namespace Biqon\Http\Controllers;

use Illuminate\Http\Request;
use Biqon\Dashboard;
use Biqon\Landing;
use Biqon\DatosLanding;
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
        $request->user()->authorizeRoles(['user']);
        return view('pages.urls',['path' => 'urls']);
    }

    public function indexSinUrls(Request $request)
    {
        $request->user()->authorizeRoles(['user']);
        return view('pages.sinurls',['path' => 'sinurls']);
    }

    public function indexDashboard(Request $request)
    {
        $request->user()->authorizeRoles(['user']);
        $id = Auth::id();

        $iframe = Dashboard::where('user_id', $id)->first();                  

        return view('pages.dashboard', ['path' => 'dashboard', 'iframe' => $iframe->url]);        
        
    }

    public function indexUploads(Request $request)
    {
        $request->user()->authorizeRoles(['user']);
        $id = Auth::id();

        $landing = Landing::all();
        return view('pages.uploads', ['path' => 'uploads', 'user_id' => $id, 'landing' => $landing]);        
        
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
