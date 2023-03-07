<?php

namespace App\Http\Controllers\Request;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use Illuminate\Http\Request;

class AppropriateProductController extends Controller
{
    public function show(string $id) {
        $product = \App\Models\Request\Request::find($id);
        $requests = Product::where('name','LIKE','%'.$product->name.'%')
            ->paginate(5);
        return view('profile.request.appropriate_product', compact('requests'));
    }
}
