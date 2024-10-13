<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        return Products::all();
    }

    public function addProduct(Request $request){
        $product = Products::create($request->all());
        return response()->json($product,201);
    }

    public function detailProduct($id_product){
        return Products::findOrFail($id_product);
    }

    public function updateProduct(Request $request, $id_product){
        $product = Products::findOrFail($id_product);
        $product->update($request->all());
        return response()->json($product,200);
    }

    public function deleteProduct($id_product){
        Products::destroy($id_product);
        return response()->json(null,204);
    }
}
