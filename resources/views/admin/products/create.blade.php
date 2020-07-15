@extends('layouts.app')
@section('content')



<form action="{{ route('admin.products.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <input class="form-control" type="text" name="name" placeholder="name">
        <input class="form-control" type="text" name="description" placeholder="description">
        <input class="form-control" type="text" name="price" placeholder="price">
        <input class="form-control" type="text" name="body" placeholder="mobile_phone">
        <input class="form-control" type="text" name="slug" placeholder="slug">

        <select name="store" class="form-control form-control-lg">
            <option value="" selected >Loja</option>
            @foreach ($stores as $store)
            <option value="{{ $store->id }}">{{ $store->name }}</option>
            @endforeach

        </select>
    </div>
    <button type="submit" class="btn btn-primary">Criar produto</button>
</form>
@endsection

