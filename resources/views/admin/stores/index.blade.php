<table>
    <thead>
        <th>#</th>
        <th>loja</th>
        <th>acoes</th>
    </thead>
    <tbody>
        @foreach ($stores as $store)
        <tr>
            <td>{{ $store->id }}</td>
            <td>{{ $store->name }}</td>
        </tr>
        @endforeach

    </tbody>
</table>
{{ $stores->links()}}
