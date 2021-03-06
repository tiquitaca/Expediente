<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserCreateRequest;
use App\User;
use App\Helper\DataViewer;

class UsuarioController extends Controller
{
    //

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getUsers()
    {
        //
        $model = User::SearchPaginateAndOrder();
        $columns = User::$columns;

        return response()
            ->json([
                'model'=> $model,
                'columns'=>$columns
                ]);       
    }

    public function index(Request $request)
    {
        //Retorna la vista correspondiente
        return view('users.users');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('users.create-modal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        //
        $user = $request->all();

        User::create([
            'username' => $user['username'],
            'name' => $user['name'],
            'tipo' => $user['tipo'],
            'password' => bcrypt($user['password'])
        ]);

        return response()->json($user, 201);

    
        
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
        $user = User::find($id);

        return response()->json($user);
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
        $user = User::find($id);
        $user = fill($request->all());
        $user->save();

        return response()->json([ "mensaje"=> "listo"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar Usuario
        User::find($id)->delete();
        return response()->json(['done']);
}


}
