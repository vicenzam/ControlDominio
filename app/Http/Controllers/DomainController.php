<?php

namespace Appdominio\Http\Controllers;

use Illuminate\Http\Request;
use Appdominio\Domain;
use Appdominio\Client;
use Appdominio\Provider;
use Appdominio\Account;
use Appdominio\Http\Requests\DomainRequest;
use Carbon\Carbon;

class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $now = Carbon::now();     
        $domains = Domain::orderBy('id', 'ASC')->paginate(10);
        return view('domains.index', compact('domains','now'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        $providers = Provider::all();
        $accounts = Account::all();

        return view('domains.create', compact('clients','providers','accounts'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DomainRequest $request)
    {
        $domain = new Domain;

        $domain->client_id = $request->client_id;
        $domain->provider_id = $request->provider_id;
        $domain->account_id = $request->account_id;
        $domain->nombre = $request->nombre;
        $domain->registro = $request->registro;
        $domain->vence = $request->vence;
        $domain->observacion = $request->observacion;
        $domain->estado = $request->estado;

        $domain->save();

        return redirect()->route('dominios.index')->with('info', 'El Dominio fue Guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $domain = Domain::find($id);
        return view('domains.show', compact('domain'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $domain = Domain::find($id);
        $clients = Client::all();
        $providers = Provider::all();
        $accounts = Account::all();
        return view('domains.edit', compact('domain','clients','providers','accounts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DomainRequest $request, $id)
    {
        $domain = Domain::find($id);

        $domain->client_id = $request->client_id;
        $domain->provider_id = $request->provider_id;
        $domain->account_id = $request->account_id;
        $domain->nombre = $request->nombre;
        $domain->registro = $request->registro;
        $domain->vence = $request->vence;
        $domain->observacion = $request->observacion;
        $domain->estado = $request->estado;

        $domain->save();

        return redirect()->route('dominios.index')->with('info', 'El Dominio fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $domain = Domain::find($id);
        $domain->delete();
        return back()->with('info', 'El Dominio fue Eliminado');
    }
}
