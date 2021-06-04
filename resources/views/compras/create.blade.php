<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

<div class="vontainer">

    <h1>Formulario</h1>

        <form action="{{ route('compras.store') }}" method="post">

            @csrf

            <div>
                <label for="">Material:</label>
                <input class="form-control" type="text" name="material" id="" placeholder="Material">
            </div>

            <div>
                <label for="">Precio:</label>
                <input class="form-control" type="float" name="precio" id="" placeholder="Precio">
            </div>
            <div>
                <label for="">Cantidad:</label>
                <input class="form-control" type="number" name="cantidad" id="" placeholder="Cantidad">
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
