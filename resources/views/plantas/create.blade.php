<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

<div class="vontainer">

    <h1>Formulario</h1>

        <form action="{{ route('plantas.store') }}" method="post">

            @csrf

            <div>
                <label for="">Típo de planta:</label>
                <input class="form-control" type="text" name="tipo_planta" id="" placeholder="Tipo de planta">
            </div>

            <div>
                <label for="">Nombre de planta:</label>
                <input class="form-control" type="text" name="nombre_planta" id="" placeholder="Nombre de planta">
            </div>
            <div>
                <label for="">Precio:</label>
                <input class="form-control" type="number" name="precio" id="" placeholder="Precio">
            </div>
            <div>
                <label for="">Altura:</label>
                <input class="form-control" type="number" name="altura" id="" placeholder="Altura">
            </div>
            <div>
                <label for="">Descripción:</label>
                <input class="form-control" type="description" name="descripcion" id="" placeholder="Descripción">
            </div>

            <input class="btn btn-primary" type="submit" value="Guardar">

        </form>

</div>
