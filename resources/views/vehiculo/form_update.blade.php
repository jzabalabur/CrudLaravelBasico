<h1>Añadir Vehículo</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{route('vehiculo.update', $vehiculo)}}">
    @csrf
    @method('PUT')
    <label>Modelo:</label>
    <input type="text" name="modelo" value="{{$vehiculo->modelo}}">

    <label>Año:</label>
    <input type="number" name="año" value="{{$vehiculo->año}}">

    <label>Precio:</label>
    <input type="number" name="precio" step="0.01" value="{{$vehiculo->precio}}">

    <label>Marca:</label>
    <select name="marca_id">
        
        <!-- Opciones de marcas -->
         @foreach ($marcas as $marca)
         <option value="{{$marca->id}}">{{$marca->nombre}}</option>
         @if($marcaActual->id===$marca->id)
         <option value="{{$marca->id}}" selected>{{$marca->nombre}}</option>
         @endif
         @endforeach
    </select>

    <button type="submit">Guardar</button>
</form>