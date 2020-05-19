<?php

namespace App\Http\Controllers;


use App\Device;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Redirect;

class DeviceController extends Controller
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
        //variable que trae la informacion actual del usuario 
        $user_auth = Auth::User();
        $nodos = DB::table('nodo')->select('*')->get();
        $tipos_energia = DB::table('opc_clasificacion_device')->select('*')->get();
        
        if (isset($user_auth->id_permiso) && $user_auth->id_permiso <= 2) {
            //vista para crear un device [carpeta/nombre archivo]
            return view('device/create_device',['nodos'=>$nodos, 'tipos_energia'=> $tipos_energia]);
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

         //
            //Validacion
        $request->validate([
            'nodo' => 'required|numeric',
            'serial' => ['regex:/(^[0-9A-Z_\-]+([0-9]$))/i'],
            'nombre' => 'required|alpha_dash',
            'sensores' => 'required|numeric',
            'tipo' => 'required|integer|between:1,3',  
            'puerto' => 'required|integer'                        
        ]);
        //
        Device::create([
            'id_nodo' => $request->nodo,
            'mac' => $request->serial,
            'nombre' => $request->nombre,
            'num_sensores' => $request->sensores,
            'id_clasificacion' => $request->tipo,
            'port' => $request->puerto
        ]);

        //return $this-> create(); 
        return Redirect::back()->with('alert', 'Un nuevo equipo ha sido creado con Éxito'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //variable que trae la informacion actual del usuario 
        $user_auth = Auth::User();
        
        if (isset($user_auth->id_permiso) && $user_auth->id_permiso <= 3) {
            //vista para consultar un device [carpeta/nombre archivo]
            $data = Device::where('estado', 1)->paginate(10);
            return view('device/consulta_device', compact('data'));
        }else{
            return abort(403, 'Unauthorized action, please contact the administrator for further information or help.');
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function edit(Device $device)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Device $device)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        //
    }
}
