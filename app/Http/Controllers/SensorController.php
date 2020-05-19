<?php

namespace App\Http\Controllers;

use App\Sensor;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Redirect;
class SensorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //vista para crear un sensor [carpeta/nombre archivo]

        //variable que trae la informacion actual del usuario 
        $user_auth = Auth::User();

        $devices = DB::table('device')->select('*')->get();
        $marcas = DB::table('opc_marcas_sensor')->select('*')->get();
        
        if (isset($user_auth->id_permiso) && $user_auth->id_permiso <= 2) {
            return view('sensor/create_sensor', ['devices' => $devices, 'marcas' => $marcas]);
        }else{
            return abort(403, 'Unauthorized action, please contact the administrator for further information or help.');
        }    
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request)
    {
        //
            //Validacion
        $request->validate([
            'dispositivo' => 'required|numeric',
            'marca' => 'required|numeric',
            'rango' => 'required|alpha_dash',
            'sensibilidad' => 'required|numeric',
            'resolucion' => 'required|numeric'                          
        ]);
        //
        Sensor::create([
            'id_device' => $request->dispositivo,
            'id_marca' => $request->marca,
            'num_rango' => $request->rango,
            'sensibilidad' => $request->sensibilidad,
            'resolucion' => $request->resolucion
        ]);

        //return $this->create();
        return Redirect::back()->with('alert', 'Un nuevo sensor ha sido creado con Éxito'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sensor  $sensor
     * @return \Illuminate\Http\Response
     */
    public function show(Sensor $sensor)
    {
        //variable que trae la informacion actual del usuario 
        $user_auth = Auth::User();
        
        if (isset($user_auth->id_permiso) && $user_auth->id_permiso <= 3) {
            //vista para consultar un nodo [carpeta/nombre archivo]
            $data = Sensor::where('estado', 1)->paginate(10);
            return view('sensor/consulta_sensor', compact('data'));
        }else{
            return abort(403, 'Unauthorized action, please contact the administrator for further information or help.');
        }  
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sensor  $sensor
     * @return \Illuminate\Http\Response
     */
    public function edit(Sensor $sensor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sensor  $sensor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sensor $sensor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sensor  $sensor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sensor $sensor)
    {
        //
    }
}
