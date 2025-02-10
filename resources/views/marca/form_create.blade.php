<h1>Añadir Marca</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{route('marca.store')}}">
    @csrf
    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{$marca->nombre}}">

    <button type="submit">Guardar</button>
</form>