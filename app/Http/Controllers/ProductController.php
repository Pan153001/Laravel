<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {
    var $rp = 10;
    public function index() {
        $products = Product::paginate($this->rp);
        return view('product/index', compact('products'));
    }
    public function search(Request $request) {
        $query = $request->q;
        if($query) {
            $products = Product::where('code', 'like', '%'.$query.'%')
            ->orWhere('name', 'like', '%'.$query.'%')
            ->paginate($this->rp);
        } else {
        $products = Product::paginate($this->rp);
        }
        return view('product/index', compact('products'));
    }
}
