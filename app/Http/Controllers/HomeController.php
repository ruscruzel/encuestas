<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encuesta;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    
    public function store(Request $request) 
    {
        $encuesta = new Encuesta();
        // $message = $request->validate([
        //     'nombre' => 'required',
        //     'correo' => 'required|email',
        //     'telefono' => 'required',
        //     'proyecto' => 'required',
        // ]);
        
        //$resp = $request->all();
        $list_mayor = implode(",", $request->ckeckUtilidadMayor);
        $list_menor = implode(",", $request->ckeckMenorUtilidades);
        $list_no_utilidades = implode(",", $request->ckeckNoHuboUtilidades);
        
        $encuesta->nombre = $request->nombre;
        $encuesta->empresa = $request->empresa;
        $encuesta->acepto_encuesta = $request->radioAcepto;
        $encuesta->sector_empresa = $request->sectorEmpresa;
        $encuesta->numero_empleados = $request->radioNumEmpleados;
        $encuesta->reparto_utilidades = $request->radioUtilidades;
        $encuesta->monto_ptu = $request->radioMonto;
        $encuesta->utilidades_mayor = $list_mayor;
        $encuesta->utilidades_menor = $list_menor;
        $encuesta->dias_salario_estimado = $request->dias_de_salario;
        $encuesta->razones_no_utilidades = $list_no_utilidades;
        $encuesta->anio_anterior_ptu = $request->anio_anterior_ptu;
        $encuesta->save();
        return 'Encuesta guardada';
    }
}