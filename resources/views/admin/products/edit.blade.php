@extends('layouts.app')
@section('content')



<form action="{{ route('admin.products.update', ['product' => $product->id]) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <input class="form-control" type="text" name="name" placeholder="name" value="{{ $product->name }}">
        <input class="form-control" type="text" name="description" placeholder="description" value="{{ $product->description }}">
        <input class="form-control" type="text" name="phone" placeholder="phone"value="{{ $product->price }}">
        <input class="form-control" type="text" name="mobile_phone" placeholder="mobile_phone"value="{{ $product->body }}">
        <input class="form-control" type="text" name="mobile_phone" placeholder="mobile_phone"value="{{ $product->slug }}">


    </div>
    <button type="submit" class="btn btn-primary">Salvar edicao</button>
</form>
@endsection
