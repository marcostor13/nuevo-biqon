<?php

namespace Biqon\Http\Controllers;

use Biqon\Landing;
use Biqon\Visita;
use Biqon\Formulario;
use Biqon\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class LandingController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // $request->user()->authorizeRoles(['user', 'admin']);
        // return view('home');
        
        $landing = Landing::where('name', $request->name)                    
                    ->first();
        if($landing && is_object($landing)){
            return view('landings.'.$landing->name, ['landing' => $landing]);
        }
        abort(404);
        
    }

    public function sendMail(Request $request){

        $data = $request->input('data'); 
        $email = $request->input('email'); 
        
        Mail::to($email)->send(new MessageReceived($data));

        return 'Mensaje Enviado';


    }

    public function validateRut(Request $request){

        $fourRut = $request->input('fourRut'); 
        
        if($fourRut == '1111'){
            $data = array(
                'name' => 'Guillermo Bahamondes',
                'pay' => '$ 500.50',  
            ); 

            return json_encode(array('code' => 200, 'data' => $data));
        }

        return json_encode(array('code' => 100, 'msg' => 'Rut incorrecto'));


    }

    public function insertLanding(Request $request)
    {

        $landing = new Landing;
        $landing->nombre = $request->nombre;
        $landing->url = $request->url;
        $landing->cliente = $request->cliente;
        $landing->save();

        return 'Registro Insertado';
        
    }

    public function visitaNueva(Request $request)
    {

        $landing = new Visita;
        $landing->landing_id = $request->landing_id;
        if(isset($request->rut)){
            $landing->rut = $request->rut;
        }
        if(isset($request->telefono)){
            $landing->telefono = $request->telefono;
        }
        if(isset($request->nombre_cliente)){
            $landing->nombre_cliente = $request->nombre_cliente;
        }
        if(isset($request->json_datos)){
            $landing->json_datos = $request->json_datos;
        }
        
        $landing->save();

        return 'Registro Insertado';
        
    }

    public function formularioNuevo(Request $request)
    {

        $landing = new Formulario;
        $landing->landing_id = $request->landing_id;
        $landing->json_datos = $request->json_datos;
        if(isset($request->rut)){
            $landing->rut = $request->rut;
        }
        if(isset($request->telefono)){
            $landing->telefono = $request->telefono;
        }
        if(isset($request->nombre_cliente)){
            $landing->nombre_cliente = $request->nombre_cliente;
        }
        
        $landing->save();

        return 'Registro Insertado';
        
    }


}
