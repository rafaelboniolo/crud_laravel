<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    public function index() {
        $products = Produto::all();
        $total = Produto::all()->count();
        return view('list-produtos', compact('products', 'total'));
    }

    public function create() {
        return view('include-produto');
    }

    public function store(Request $request) {
        $product = new Produto;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->save();
        return redirect()->route('product.index')->with('message', 'Produto criado com sucesso!');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $product = Produto::findOrFail($id);
        return view('alter-produto', compact('product'));
    }

    public function update(Request $request, $id) {
        $product = Produto::findOrFail($id); 
        $product->name = $request->name;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->save();
        return redirect()->route('product.index')->with('message', 'Produto alterado com sucesso!');
    }

    public function destroy($id) {
        $product = Produto::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index')->with('message', 'Produto excluído com sucesso!');
    }

}
