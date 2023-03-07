@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center align-middle h-100">
            <div class="col-md-12">
                <h3 class="text-center align-middle">Здравствуйте, @guest гость @else {{ Auth::user()->name }} @endguest </h3>
            </div>
        </div>
    </div>
@endsection
