<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

<div class="vontainer">

    <h1>Formulario</h1>

        <form action="{{ route('ventas.store') }}" method="post">

            @csrf

            <div>
                <label for="">Plantas:</label>
                <input class="form-control" type="number" name="plantas" id="" placeholder="Plantas">
            </div>

            <div>
                <label for="">Nombre planta:</label>
                <input class="form-control" type="text" name="nombre_planta" id="" placeholder="Nombre planta">
            </div>
            <div>
                <label for="">Fecha:</label>
                <input class="form-control" type="date" name="fecha" id="" placeholder="Fecha">
            </div>
            <div>
                <label for="">Hora:</label>
                <input class="form-control" type="time" name="hora" id="" placeholder="Hora">
            </div>

            <input class="btn btn-primary" type="submit" value="Guardar">

        </form>

</div>
