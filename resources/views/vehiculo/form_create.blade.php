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
<form method="POST" action="{{route('vehiculo.store')}}">
    @csrf
    <label>Modelo:</label>
    <input type="text" name="modelo">

    <label>Año:</label>
    <input type="number" name="año">

    <label>Precio:</label>
    <input type="number" name="precio" step="0.01">

    <label>Marca:</label>
    <select name="marca_id">
        <!-- Opciones de marcas -->
         @foreach ($marcas as $marca)
         <option value="{{$marca->id}}">{{$marca->nombre}}</option>
         @endforeach
    </select>

    <button type="submit">Guardar</button>
</form>