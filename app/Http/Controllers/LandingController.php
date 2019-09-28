<?php

namespace Biqon\Http\Controllers;

use Biqon\Landing;
use Biqon\Visita;
use Biqon\Event;
use Biqon\User;
use Biqon\Formulario;
use Biqon\DatosLanding;

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
         $phone = $request->input('phone');  
        $landing_id = $request->input('landing_id'); 
        
        $data = DatosLanding::where('rut', 'LIKE', $fourRut.'%')     
                    ->where('landing_id', $landing_id) 
                    ->where('telefono', $phone)               
                    ->first();
       
        if ($data){
           
            return json_encode(array('code' => 200, 'data' => $data));
        }else{

        return json_encode(array('code' => 100, 'msg' => 'Rut O Telefono incorrecto'));
        }
    }

    public function events(Request $request)
    {

        $landing = new Event;
        $landing->name = $request->name;
        $landing->landing_id = $request->landing_id;
        $landing->json_datos = $request->json_datos;
        $landing->save();

        return array('code' => 200, 'msg' => 'Evento Registrado');
        
    }

    public function insertLanding(Request $request)  // reemplazado por events
    {

        $landing = new Landing;
        $landing->nombre = $request->nombre;
        $landing->url = $request->url;
        $landing->cliente = $request->cliente;
        $landing->save();

        return array('code' => 200, 'msg' => 'Registro Insertado');
        
    }

    public function visitaNueva(Request $request)  // reemplazado por events
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

        return array('code' => 200, 'msg' => 'Registro Insertado');
        
    }

    public function formularioNuevo(Request $request)  // reemplazado por events
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

        return array('code' => 200, 'msg' => 'Registro Insertado');
        
    }

    public function newClient(Request $request){
        $client = new User;
        $client->name = $request->name;
        $client->company = $request->company;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->password = bcrypt($request->password);    
        $client->save();

        $client = new Role_User;
        $client->user_id = Auth::id();
        $client->role_id = 2;
        $client->save();

        return array('code' => 200, 'msg' => 'Cliente Ingresado');
    }

    public function newLanding(Request $request){
        $landing = new Landing;
        $landing->name = $request->name;
        $landing->url = 'http://bint.ml/landings/'.strtolower($request->name);
        $landing->logo = $request->logo;
        $landing->email = $request->email;
        $landing->background = $request->background;
        $landing->client_id = $request->client_id;
        $landing->save();

        return array('code' => 200, 'msg' => 'Landing Insertada');
    }


}
