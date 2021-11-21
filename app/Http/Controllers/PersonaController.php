<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use Illuminate\Support\Facades\Redirect;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request) {
            $query = trim($request->get('searchText'));
            $personas = Persona::orderBy('id_persona', 'DESC')
                ->where('nombre', 'LIKE', '%' . $query . '%')
                ->orwhere('tipo_doc', 'LIKE', '%' . $query . '%')
                ->orwhere('numero_doc', 'LIKE', '%' . $query . '%')
                ->orwhere('correo', 'LIKE', '%' . $query . '%')
                ->orwhere('telefono', 'LIKE', '%' . $query . '%')
                ->paginate(10);
            return view('persona.index', ["personas" => $personas, "searchText" => $query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        return view('persona.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personas = new Persona;
        $personas->nombre = $request->get('nombre');
        $personas->tipo_doc = $request->get('tipo_doc');
        $personas->numero_doc = $request->get('numero_doc');
        $personas->correo = $request->get('correo');
        $personas->telefono = $request->get('telefono');
        $personas->save();
        //return Redirect::to('createu');
        $ultimaP= Persona::latest('id_persona')->first();
       
        //dd( $ultimaP);
  
        return view('user.create_Usuario', ["ultimaP" => $ultimaP]);
         //return Redirect::to('register');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id_persona)

    {
        $request->user()->authorizeRoles('admin');
        $personas = Persona::findOrFail($id_persona);
        return view("persona.edit", ["personas" => $personas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_persona)
    {
        $personas = Persona::findOrFail($id_persona);
        $personas->nombre = $request->get('nombre');
        $personas->tipo_doc = $request->get('tipo_doc');
        $personas->numero_doc = $request->get('numero_doc');
        $personas->correo = $request->get('correo');
        $personas->telefono = $request->get('telefono');
        $personas->update();
        return Redirect::to('persona');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_persona
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_persona)
    {
        $personas = Persona::findOrFail($id_persona);
        $personas->delete();
        return Redirect::to('persona');
    }
}
