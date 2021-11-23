<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Estudiante;
use DB;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $estudiantes=DB::table('estudiantes as est')
        ->join('personas as per','est.id_persona','=','per.id_persona')
        ->select( 'est.id_estudiante','est.grupo','est.jornada','est.programa','est.semestre','per.tipo_doc','per.numero_doc','per.nombre','per.correo','per.id_persona','per.telefono')
        ->orderBy('est.id_estudiante','DESC')->paginate(5);
        return view('user.index_estudiante', ["estudiantes" => $estudiantes]);
    


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
        Estudiante::create([

            'id_persona' => $request->get('id_persona'),
            'programa' => $request->get('programa'),
            'grupo' => $request->get('grupo'),
            'password' => $request->get('password'),
            'semestre' => $request->get('semestre'),
            'jornada' => $request->get('jornada'),
        ]);

       

        // dd( $ultimaP);
        return Redirect::to('persona');

        //   return Redirect::to('register');
    }




    /**
     * Display the specified resource.
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