@extends('layouts.app')
@section('content')


<a href="{{route('admin.products.create')}}" class="btn btn-lg btn-success">Criar Produto</a>
<table class="table">
    <thead>
        <th>#</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>|Açoes</th>
        <th><a href=" " class="bg-success text-white">ADD</a>
    </thead>
    <tbody>
        @foreach ($products as $prod)
        <tr>
            <td>{{ $prod->id }}</td>
            <td>{{ $prod->name }}</td>
            <td>{{ $prod->price }}</td>
            <td>
                <form action="{{route('admin.products.destroy',[$prod->id])}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="bg-danger text-white">Delete</button>
               </form>

            </td>
            <td><a href="{{route('admin.products.edit',[$prod->id])}}" ><button type="submit" class="bg-warning text-white">Editar</button></a></td>
        </tr>
        @endforeach
        @jquery
        @toastr_js
        @toastr_render
    </tbody>
</table>
{{ $products->links()}}
@endsection
@section('js')


<script>
    $('#msg').not('.alert-important').delay(3000).fadeOut(350);
    </script>
@endsection
