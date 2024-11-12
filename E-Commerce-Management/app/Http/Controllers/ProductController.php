<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Products;
use Illuminate\Http\Request;
use Response;

class ProductController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();
        return response()->json($products, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = $request->validate([
                'id_categorie' => 'required|integer',
                'name_product' => 'required|string|max:255',
                'description_product' => 'required|string|max:500',
                'price_product' => 'required|numeric',
                'stock_quantity_product' => 'required|integer',
                'sku_product' => 'required|string|max:255',
                'image_url_product' => 'required|array',
                'image_url_product.*' => 'file|image|max:2048',
            ]);
            $imagePaths = [];
            if ($request->hasFile('image_url_product')) {
                foreach ($request->file('image_url_product') as $image) {
                    if ($image->isValid()) {
                        $path = $image->store('products', 'public');
                        $imagePaths[] = Storage::url($path); 
                    } else {
                        return response()->json(['message' => 'Invalid image file'], 400);
                    }
                }
                $data['image_url_product'] = json_encode($imagePaths);
            }
            $product = Products::create($data);
            return response()->json(['message' => 'Product created successfully!', 'product' => $product], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed to create product',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
