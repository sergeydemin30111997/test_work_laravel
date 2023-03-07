<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function index() {
        $requests = auth()->user()->request()->with('type')->paginate(5);

        return view('profile.request.index', compact('requests'));
    }
}
