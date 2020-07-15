@extends('layouts.app')
@section('content')
<div id="msg">
    @include('flash::message')
</div>
@toastr_css
<table class="table">
    <thead>
        <th>#</th>
        <th>Loja</th>
        <th>Ações</th>
        <th><a href="{{route('admin.stores.create')}} " class="bg-success text-white">ADD</a>
    </thead>
    <tbody>
        @foreach ($stores as $store)
        <tr>
            <td>{{ $store->id }}</td>
            <td>{{ $store->name }}</td>
            <td>
                <form action="{{route('admin.stores.destroy',[$store->id])}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="bg-danger text-white">Delete</button>
               </form>

            </td>
            <td><a href="{{route('admin.stores.edit',[$store->id])}}" ><button type="submit" class="bg-warning text-white">Editar</button></a></td>
        </tr>
        @endforeach
        @jquery
        @toastr_js
        @toastr_render
    </tbody>
</table>
{{ $stores->links()}}
@endsection
@section('js')


<script>
    $('#msg').not('.alert-important').delay(3000).fadeOut(350);
    </script>
@endsection
