<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Persona;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Role;
use Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        if ($request) {


            /*
            $query = trim($request->get('searchText'));
            $personas = Persona::orderBy('id_persona', 'DESC')
                ->where('nombre', 'LIKE', '%' . $query . '%')
                ->orwhere('tipo_doc', 'LIKE', '%' . $query . '%')
                ->orwhere('numero_doc', 'LIKE', '%' . $query . '%')
                ->orwhere('correo', 'LIKE', '%' . $query . '%')
                ->orwhere('telefono', 'LIKE', '%' . $query . '%')
                ->paginate(5);
            return view('persona.index', ["personas" => $personas, "searchText" => $query]);
            */
        }




        $personas = new Persona;
        $personas->nombre = $request->get('nombre');

        dd($personas);
        return view('user.create_Usuario');
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
       
        
       // $avatar = $request->get('avatar');

        //dd($avatar);
       
       // $filename = time() . '.' . $avatar->getClientOriginalExtension();
        //Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename) );
        $user = User::create([
            'id_persona' => $request->get('id_persona'),
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
            'avatar' => 'default.png',
        ]);

        $ultimoU= User::latest('id')->first();
       
      //   dd( $ultimoU);
  
         // return view('user.create_Usuario', ["ultimaP" => $ultimaP]);

        
        $user->roles()
        ->attach(Role::where('name', 'user')->first());
        return $user;

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
