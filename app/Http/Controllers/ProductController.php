<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return response()->json($products, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
    $data = $request->validate([
        'name' => 'required',
        'price' => 'required|numeric',
        'quantity' => 'required|integer',
    ]);

    $product = Product::create($data);

    return response()->json($product, 201);
    }

    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::find($id);
    
        if (!$product) {
            return response()->json(['message' => 'Produit non trouvé'], 404);
        }
    
        return response()->json($product, 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
    
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);
    
        $product->update($validatedData);
    
        return response()->json($product, 200);
    }

    /**
     * search  the specified resource from storage.
     */
    
    public function search(Request $request)
    {
      $query = Product::query();
      $data = $request -> input('search');
      if($data){
        $query-> whereRaw("name LIKE '%".$data. "%'");
      }
      return $query -> get();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id);
    
        if (!$product) {
            return response()->json(['message' => 'Produit non trouvé'], 404);
        }
    
        $product->delete();
    
        return response()->json(['message' => 'Produit supprimé avec succès'], 204);
    }
}
