<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

<div class="vontainer">

    <h1>Formulario</h1>

        <form action="{{ route('clientes.store') }}" method="post">

            @csrf

            <div>
                <label for="">Apellido paterno:</label>
                <input class="form-control" type="text" name="apellido_paterno" id="" placeholder="Apellido paterno">
            </div>

            <div>
                <label for="">Apellido materno:</label>
                <input class="form-control" type="text" name="apellido_materno" id="" placeholder="Apellido materno">
            </div>
            <div>
                <label for="">Nombre:</label>
                <input class="form-control" type="text" name="nombre" id="" placeholder="Nombre">
            </div>
            <div>
                <label for="">Numero:</label>
                <input class="form-control" type="number" name="numero" id="" placeholder="Numero">
            </div>
            <div>
                <label for="">Dirección:</label>
                <input class="form-control" type="text" name="direccion" id="" placeholder="Dirección">
            </div>
            <div>
                <label for="">Correo:</label>
                <input class="form-control" type="text" name="correo" id="" placeholder="Correo">
            </div>

            <input class="btn btn-primary" type="submit" value="Guardar">

        </form>

</div>
