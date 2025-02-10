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

    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{$marca->nombre}}" readonly>

