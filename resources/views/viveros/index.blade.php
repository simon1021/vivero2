@extends('plantilla.dashboard')
@section('title', 'Planta')

@section('content')

<div class="container">
        <div class="row">
            <div class="col"></div>

            <div class="col">
                <!--inicia-->
                <form action="">
                    <div>
                        <label for="">Tipo de planta: </label>
                        <input type="text" name=>
                    </div>
                    <div>
                        <label for="">Nombre de planta: </label>
                        <input type="text" name=>
                    </div>
                    <div>
                        <label for="">Precio: </label>
                        <input type="text" name=>
                    </div>
                    <div>
                        <label for="">Altura: </label>
                        <input type="text" name=>
                    </div>
                    <div>
                        <label for="">Description: </label>
                        <input type="text" name=>
                    </div>
                </form>
            </div>

            <div class="col"></div>
        </div>
    </div>


 @endsection