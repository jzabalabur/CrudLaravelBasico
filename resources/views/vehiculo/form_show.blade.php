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

    <label>Modelo:</label>
    <input type="text" name="modelo" value="{{$vehiculo->modelo}}" readonly>

    <label>Año:</label>
    <input type="number" name="año" value="{{$vehiculo->año}}" readonly>

    <label>Precio:</label>
    <input type="number" name="precio" step="0.01" value="{{$vehiculo->precio}}" readonly>

    <label>Marca:</label>
    <select name="marca_id" readonly>
        
         <option value="{{$marcaActual->id}}" selected>{{$marcaActual->nombre}}</option>

    </select>
