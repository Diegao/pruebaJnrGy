@extends('layouts.app')

@section('titulo_pagina',__('Show Permission'))

@section('content')
    <!DOCTYPE html>
<html>
<head>
    <title>Factorial</title>
    <style>
        #formFactorial input[type="number"],
        #formFactorial button {
            display: inline-block;
            vertical-align: middle;
        }

        #resultado {
            display: inline-block;
            vertical-align: middle;
            color: green;
            margin-left: 10px; /* Ajusta el espacio entre el botón y el resultado */
        }

        #operacion {
            margin-top: 10px; /* Ajusta el espacio entre el resultado y la operación */
        }
    </style>
</head>
<body>
<div class="container">
<h1>Calcular el factorial de un número</h1>

<form id="formFactorial">
    @csrf
{{--    <input type="number" class="form-control"  name="num" id="inputNum" required>--}}
{{--  --}}
{{--    <input type="text" class="form-control"  id="operacionInput" disabled>--}}
{{--    <input type="text" class="form-control"   id="resultadoInput" disabled>--}}

    <div class="row">
        <div class="col-md-4">
            <div class="input-container">
                <label for="inputNum">Numero a calcular:</label>
                <input type="text" class="form-control" id="inputNum" name="inputNum" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-container">
                <label for="operacionInput">Operacion</label>
                <input type="text" class="form-control" id="operacionInput" name="operacionInput" disabled>
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-container">
                <label for="resultadoInput">Resultado:</label>
                <input type="text" class="form-control" id="resultadoInput" name="resultadoInput" disabled>
            </div>
        </div>
    </div>
    <br>

    <button class="btn btn-primary" type="button" id="calcularBtn">Calcular</button>

</form>
</div>


<script>
    document.getElementById('calcularBtn').addEventListener('click', function() {
        var num = document.getElementById('inputNum').value;
        calcularFactorial(num);
    });

    function calcularFactorial(num) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var resultado = this.responseText;
                var operacion = generarOperacion(num);
                document.getElementById("resultadoInput").value = resultado;
                document.getElementById("operacionInput").value = operacion;
            }
        };
        xhttp.open("POST", "/scripts/factorial.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("num=" + num);
    }

    function generarOperacion(num) {
        var operacion = num;
        for (var i = num - 1; i >= 1; i--) {
            operacion += " * " + i;
        }
        return operacion;
    }
</script>

</body>
</html>


@endsection
