<?php

namespace App\Http\Controllers\Request;

use App\Http\Controllers\Controller;
use App\Models\Product\Type;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests = \App\Models\Request\Request::latest()->paginate(5);
        return view('request.index', compact('requests'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $typesProduct = Type::all();
        return view('request.create', compact('typesProduct'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, \App\Models\Request\Request $requestm)
    {
        $validated = $request->validate([
            'name' => 'required|unique:products|max:50',
            'min' => 'required|integer',
            'max' => 'required|integer',
            'type' => 'required|integer',
        ]);
        $requestm->name = $request->name;
        $requestm->min = $request->min;
        $requestm->max = $request->max;
        $requestm->type_id = $request->type;
        $requestm->user_id = auth()->user()->id;
        $requestm->save();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
        \App\Models\Request\Request::find($id)->delete();
        return back();
    }
}
