<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

<div class="vontainer">

    <h1>Formulario</h1>

        <form action="{{ route('viveros.store') }}" method="post">

            @csrf

            <div>
                <label for="">Dirección:</label>
                <input class="form-control" type="text" name="direccion" id="" placeholder="Dirección">
            </div>

            <div>
                <label for="">Correo:</label>
                <input class="form-control" type="text" name="correo" id="" placeholder="Correo">
            </div>
            <div>
                <label for="">Telefono:</label>
                <input class="form-control" type="number" name="telefono" id="" placeholder="Telefono">
            </div>
            <div>
                <label for="">Propietario:</label>
                <input class="form-control" type="text" name="propietario" id="" placeholder="Propietario">
            </div>

            <input class="btn btn-primary" type="submit" value="Guardar">

        </form>

</div>
