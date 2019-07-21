<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index()
  {
    return view('product.index', [
      'product' => Product::latest()->paginate()
    ]);
  }

  public function create()
  {
    return view('product.create', [
      'product' => new Product
    ]);
  }

  public function store(ProductRequest $r)
  {
    return Product::create( $r->validated() );
  }

  public function edit(Product $product)
  {
    return view('product.edit', compact('product'));
  }

  public function update(ProductRequest $r, Product $product)
  {
    $product->update($r->validated());
    return redirect('/');
  }

  public function destroy(Product $product)
  {
    $product->delete();
    return redirect('/product')->with('delete','');
  }
}
