<form action="{{ route('admin.stores.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <input class="form-control" type="text" name="name" placeholder="name">
        <input class="form-control" type="text" name="description" placeholder="description">
        <input class="form-control" type="text" name="phone" placeholder="phone">
        <input class="form-control" type="text" name="mobile_phone" placeholder="mobile_phone">
        <input class="form-control" type="text" name="slug" placeholder="slug">
        <select name="user" class="form-control form-control-lg">
            @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach

        </select>
    </div>
    <button type="submit" class="btn btn-primary">Criar loja</button>
</form>
