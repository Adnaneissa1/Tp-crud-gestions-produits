<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        ['id' => 1, 'libelle' => 'watch 1', 'marque' => 'Marque 1', 'prix' => 100, 'stock' => 10, 'image' => 'images/watch1.jpg'],
        ['id' => 2, 'libelle' => 'watch 2', 'marque' => 'Marque 2', 'prix' => 200, 'stock' => 20, 'image' => 'images/watch2.jpg'],
        ['id' => 3, 'libelle' => 'watch 3', 'marque' => 'Marque 3', 'prix' => 300, 'stock' => 30, 'image' => 'images/watch3.jpg'],
        ['id' => 4, 'libelle' => 'watch 4', 'marque' => 'Marque 4', 'prix' => 400, 'stock' => 40, 'image' => 'images/watch4.jpg'],
    ];
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('produits.index', ['products' => $this->products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'libelle' => 'required|string',
            'marque' => 'required|string',
            'prix' => 'required|numeric',
            'stock' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $newProduct = [
            'id' => count($this->products) + 1, 
            'libelle' => $request->input('libelle'),
            'marque' => $request->input('marque'),
            'prix' => $request->input('prix'),
            'stock' => $request->input('stock'),
            'image' => $request->file('image'),

        ];
        $this->products[] = $newProduct;
        return view('produits.index', ['products' => $this->products]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (array_key_exists($id - 1, $this->products)) {
            $product = $this->products[$id - 1];
            return view('produits.show', ['product' => $product]);
        } else {
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (array_key_exists($id - 1, $this->products)) {
            $product = $this->products[$id - 1];
            return view('produits.edit', ['product' => $product]);
        } else {
            abort(404);
        }
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

        if (array_key_exists($id - 1, $this->products)) {
            $request->validate([
                'libelle' => 'required|string',
                'marque' => 'required|string',
                'prix' => 'required|numeric',
                'stock' => 'required|numeric',
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $this->products[$id - 1]['libelle'] = $request->input('libelle');
            $this->products[$id - 1]['marque'] = $request->input('marque');
            $this->products[$id - 1]['prix'] = $request->input('prix');
            $this->products[$id - 1]['stock'] = $request->input('stock');
            $this->products[$id - 1]['image'] = $request->input('image');

            return view('produits.index', ['products' => $this->products]);
        } else {
            abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (array_key_exists($id - 1, $this->products)) {
            unset($this->products[$id - 1]);

            $this->products = array_values($this->products);

            return view('produits.index', ['products' => $this->products]);
        } else {
            abort(404);
        }
    }
}
