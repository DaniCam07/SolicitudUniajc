<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Solicitud;

use Illuminate\Support\Facades\Redirect;
use DB;
class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     * 
     */


   
    public function index()
    {
        
        
        //$solicitud=Solicitud::orderBy('id_estudiante','DESC')->paginate(3);
        $solicitudes=DB::table('solicitudes as sol')
        ->join('estudiantes as est', 'sol.id_estudiante','=','est.id_estudiante')
        ->join('personas as per','est.id_persona','=','per.id_persona')
        ->select( 'sol.id_estudiante','sol.id_solicitud','sol.id_malla_curricular','sol.fecha','sol.hora','sol.tipo_solicitud',
        'sol.observacion','est.grupo','est.jornada','est.programa','est.semestre','per.tipo_doc','per.numero_doc','per.nombre','per.correo','per.id_persona','per.telefono')
        ->orderBy('sol.id_estudiante','DESC')->paginate(5);
      
        
        return view('solicitud.index',compact('solicitudes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request )
    {
      $persona= $request->user()->id_persona;

      $estudiantes=DB::table('estudiantes as est')
      ->join('personas as per','est.id_persona','=','per.id_persona')
      ->select( 'est.id_estudiante','est.grupo','est.jornada','est.programa','est.semestre','per.tipo_doc','per.numero_doc','per.nombre','per.correo','per.id_persona','per.telefono')
      ->orderBy('est.id_estudiante','DESC')
      ->where('est.id_persona','=',$persona)->get();

//dd($estudiantes);

       
     // return view ('solicitud.create');

     return view("solicitud.create", ["estudiantes" => $estudiantes]);

      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $solicitudes=new Solicitud;
       // $solicitudes->id_solicitud=$request->get('numeros');
        $solicitudes->id_estudiante=$request->get('numerodoc');
        $solicitudes->id_malla_curricular=$request->get('malla');
        $solicitudes->fecha=$request->get('fecha');
        $solicitudes->hora=$request->get('hora');
        $solicitudes->tipo_solicitud=$request->get('tipo');
        $solicitudes->observacion=$request->get('descripcion');
        /*<$solicitudes->programa=$request->get('carrera');
        $solicitudes->grupo=$request->get('grupo');
        $solicitudes->semestre=$request->get('semestre');
        $solicitudes->jornada=$request->get('jornada');
        $solicitudes->id_persona=$request->get('personsa');
        $solicitudes->nombre=$request->get('nombre');
        $solicitudes->tipo_doc=$request->get('tipodoc');
        $solicitudes->numero_doc=$request->get('numerodoc');
        $solicitudes->correo=$request->get('email');
        $solicitudes->telefono=$request->get('telefono');*/
        $solicitudes->save();
        return Redirect::to('solicitud');
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
