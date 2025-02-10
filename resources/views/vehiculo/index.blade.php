<h1>Lista de Vehículos</h1>
<button><a href="{{route('vehiculo.create')}}">Crear nuevo registro</a></button>

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
        <th>Modelo</th>
        <th>Año</th>
        <th>Precio</th>
        <th>Marca</th>
        <th>Acciones</th>
    </tr>
    @foreach($vehiculos as $vehiculo)
    <tr>
        <th>{{$vehiculo->id}}</th>
        <th>{{$vehiculo->modelo}}</th>
        <th>{{$vehiculo->año}}</th>
        <th>{{$vehiculo->precio}}</th>
        <th>{{$vehiculo->marca_id}}</th>

        <th>
        <button><a href="{{route('vehiculo.show', $vehiculo)}}">Detalles</a></button>
        <button><a href="{{route('vehiculo.edit', $vehiculo)}}">Editar</a></button>
        <form method="POST" action="{{route('vehiculo.destroy', $vehiculo)}}">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>


        </th>

    </tr>
    @endforeach
</table>