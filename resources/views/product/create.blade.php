@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="post" action="{{ route('product.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Наименование</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <div class="form-outline">
                            <label class="form-label">Цена</label>
                            <input type="number" name="price" class="form-control"/>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Тип</label>
                        <select class="form-select" name="type">
                            @foreach($typesProduct as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Создать</button>
                </form>
            </div>
        </div>
    </div>
@endsection
