@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3>Все запросы</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Запрос</th>
                        <th scope="col">Мин.</th>
                        <th scope="col">Мах.</th>
                        <th scope="col">Тип</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($requests as $request)
                        <tr>
                            <td>{{ $request->name }}</td>
                            <td>{{ $request->min }}</td>
                            <td>{{ $request->max }}</td>
                            <td>{{ $request->type->name }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $requests->links() }}
            </div>
        </div>
    </div>
@endsection
