@extends('layouts.app')
@section('content')



<form action="{{ route('admin.stores.update', ['store' => $store->id]) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <input class="form-control" type="text" name="name" placeholder="name" value="{{ $store->name }}">
        <input class="form-control" type="text" name="description" placeholder="description" value="{{ $store->description }}">
        <input class="form-control" type="text" name="phone" placeholder="phone"value="{{ $store->phone }}">
        <input class="form-control" type="text" name="mobile_phone" placeholder="mobile_phone"value="{{ $store->mobile_phone }}">
        <input class="form-control" type="text" name="slug" placeholder="slug"value="{{ $store->slug }}">

    </div>
    <button type="submit" class="btn btn-primary">Salvar edicao</button>
</form>
@endsection
