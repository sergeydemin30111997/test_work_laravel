<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use Illuminate\Http\Request;

class AppropriateRequestController extends Controller
{
    public function show(string $id) {

        $product = Product::find($id);
        $requests = \App\Models\Request\Request::where('min', '<=', $product->price)
            ->where('max', '>=', $product->price)
            ->where('type_id', '=', $product->type_id)
            ->where('min', '<=', $product->price)
            ->get();
        $requests_array = array();
        foreach ($requests as $request) {
                if (strpos("$product->name", "$request->name") !== false) {
                    array_push($requests_array, $request->id);
                }
            }

        $requests = \App\Models\Request\Request::with('type')
            ->whereIn('id', $requests_array)
            ->paginate(5);
//        $requests = \App\Models\Request\Request::where('name','LIKE','%'.$product->name.'%')
//            ->paginate(5);
        //        where('name','LIKE','%'.$product->name.'%')
        return view('profile.product.appropriate_request', compact('requests'));
    }
}
