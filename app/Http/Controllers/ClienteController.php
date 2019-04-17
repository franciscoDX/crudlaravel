<?php

namespace App\Http\Controllers;

use App\cliente;
use Illuminate\Http\Request;
use App\http\Requests\ClientStoreRequest;
use App\http\Requests\ClientUpdateRequest;

use Session;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = cliente::orderby('id', 'DESC')->paginate(4);
        return view('clientes.index',compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientStoreRequest $request)
    {

        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images',$name);
        }
        $clientes = new cliente([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email'),
            'age' => $request->get('age'),
            'avatar' => $name,

        ]);
        $clientes->save();
        // cliente::create($request->all());

        Session::flash('message', 'Cliente agregado con exito');
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit(cliente $cliente)
    {
        return view('clientes.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(ClientUpdateRequest $request, cliente $cliente)
    {

        $cliente->update($request->all());

        Session::flash('message', 'Cliente Actualizado Correctamente');
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(cliente $cliente)
    {
        $cliente->delete();
        Session::flash('message', 'Cliente eliminado satisfactoriamente');
        return redirect()->route('clientes.index');
    }
}
