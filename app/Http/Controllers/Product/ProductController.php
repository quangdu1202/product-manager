<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\ApiController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return $this->getAll($products);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return $this->getOne($product);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['img'] = $request->img->store('');
        $product = Product::create($data);

        return $this->getOne($product);
    }

    public function update(Request $request, Product $product)
    {
        if ($request->has('name')) {
            $product->name = $request->name;
        }

        if ($request->has('img')) {
            Storage::delete($product->img);

            $product->img = $request->img->store('');
        }

        if ($request->has('price')) {
            $product->price = $request->price;
        }

        if ($request->has('description')) {
            $product->description = $request->description;
        }

        $product->save();

        return $this->getOne($product);
    }

    public function destroy(Product $product)
    {
        Storage::delete($product->img);
        $product->delete();

        return $this->getOne($product);
    }
}
