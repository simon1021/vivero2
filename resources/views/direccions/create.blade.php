<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css')}}">

<div class="vontainer">

    <h1>Formulario</h1>

        <form action="{{ route('direccions.store') }}" method="post">

            @csrf

            <div>
                <label for="">País:</label>
                <input class="form-control" type="text" name="pais" id="" placeholder="País">
            </div>

            <div>
                <label for="">Estado:</label>
                <input class="form-control" type="text" name="estado" id="" placeholder="Estado">
            </div>
            <div>
                <label for="">Municipio:</label>
                <input class="form-control" type="text" name="municipio" id="" placeholder="Municipio">
            </div>
            <div>
                <label for="">Codigo postal:</label>
                <input class="form-control" type="number" name="codigo_potal" id="" placeholder="Codigo postal">
            </div>
            <div>
                <label for="">Colonia:</label>
                <input class="form-control" type="text" name="colonia" id="" placeholder="Colonia">
            </div>
            <div>
                <label for="">Calle:</label>
                <input class="form-control" type="text" name="calle" id="" placeholder="Calle">
            </div>
            <div>
                <label for="">Número:</label>
                <input class="form-control" type="number" name="numero" id="" placeholder="Número">
            </div>

            <input class="btn btn-primary" type="submit" value="Guardar">

        </form>

</div>
