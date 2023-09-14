<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();

        return view('produto-pag', compact('produtos'));

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

        $imageName = '';

        //upload de imagem

                
        if($request->hasfile('image') && $request->file('image')->isValid()){

            $requestImage = $request->file('image');

            $extension = $requestImage->extension();

            // $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $imageName = $requestImage->getClientOriginalName();

            $requestImage->move(public_path('img/fotos'), $imageName);
        
        }

        $produtos = new Produto();

        $produtos->produto = $request->txProduto;
        $produtos->descProduto = $request->txDesc;
        $produtos->valorProduto = $request->txValor ;
        $produtos->dataValidade = $request->txData;
        $produtos->img = $request->file('image')->getClientOriginalName();

        $produtos->save();

        return redirect('/produto-pag');
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
