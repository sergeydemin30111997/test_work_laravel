@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3>Мои товары</h3>
                <a href="{{ route('product.create') }}" class="btn btn-info">Создать</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Наименование</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Дата создания</th>
                        <th scope="col">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->created_at->format('d.m.Y') }}</td>
                            <td>
                                <a href="{{ route('appropriate_request', $product->id) }}" class="btn btn-info" alt="Смотреть совпадения">С</a>
                                <form action="{{ route('product.destroy', $product->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" alt="Удалить продукт">У</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection
