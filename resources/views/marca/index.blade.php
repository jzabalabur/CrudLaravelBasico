<h1>Lista de Marcas</h1>
<button><a href="{{route('marca.create')}}">Crear nuevo registro</a></button>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-success">
        {{ session('error') }}
    </div>
@endif
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Acciones</th>
    </tr>
    @foreach($marcas as $marca)
    <tr>
        <th>{{$marca->id}}</th>
        <th>{{$marca->nombre}}</th>
        <th>
        <button><a href="{{route('marca.show', $marca)}}">Detalles</a></button>
        <button><a href="{{route('marca.edit', $marca)}}">Editar</a></button>
        <form method="POST" action="{{route('marca.destroy', $marca)}}">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>


        </th>

    </tr>
    @endforeach
</table>