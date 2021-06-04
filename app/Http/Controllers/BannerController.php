<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Redirect;


class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Listar os dados do meu Bando de Dados (Ps. Usando Model como ponte)
        $banners = Banner::all();
        return view('listar-banner', compact('banners'));


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
        // Essa linha é uma instância da minha classe(Model) Banner
        $banner = new Banner;

        // Esse bloco de código pega o nome do usuário logado.
        $user                   = Auth::user()->name; // Essa linha pega o usuário logado, eu acho!!

        $banner->user           = $user;
        $banner->nome           = $request->input('nome');
        $banner->imagem         = $request->input('imagem');

        $banner->save();

        $request->Session()->flash('message', 'Banner inserido com sucesso😁');
        return Redirect::to('/listar-banner');




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
