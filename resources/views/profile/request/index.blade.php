@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h3>Мои запросы</h3>
                <a href="{{ route('request.create') }}" class="btn btn-info">Создать</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Запрос</th>
                        <th scope="col">Мин.</th>
                        <th scope="col">Мах.</th>
                        <th scope="col">Тип</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($requests as $request)
                        <tr>
                            <td>{{ $request->name }}</td>
                            <td>{{ $request->min }}</td>
                            <td>{{ $request->max }}</td>
                            <td>{{ $request->type->name }}</td>
                            <td>
                                <a href="{{ route('appropriate_product', $request->id) }}" class="btn btn-info" alt="Смотреть совпадения">С</a>
                                <form action="{{ route('request.destroy', $request->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" alt="Удалить запрос">У</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $requests->links() }}
            </div>
        </div>
    </div>
@endsection
