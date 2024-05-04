@extends('layouts.app')

@section('titulo_pagina',__('Show Permission'))

@section('content')
    <!DOCTYPE html>
<html>
<head>
    <title>Amortizaciones</title>
    <style>
        /* Estilos opcionales para mejorar la apariencia */
        .input-container {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Tabla de Amortizaciones</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="input-container">
                <label for="monto">Monto:</label>
                <input type="text" class="form-control" id="monto" name="monto">
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-container">
                <label for="tasa">Tasa Interés:</label>
                <input type="text" class="form-control" id="tasa" name="tasa">
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-container">
                <label for="periodo">Período:</label>
                <input type="text" class="form-control" id="periodo" name="periodo">
            </div>
        </div>
    </div>
    <button class="btn btn-primary" id="calcularBtn">Generar</button>
    <div class="row mt-3">
        <table class="table" id="tablaAmortizaciones">
            <thead style="background-color: #343A40; color: white;">
            <tr>
                <th>Período</th>
                <th>Saldo</th>
                <th>Interés</th>
                <th>Abono</th>
                <th>Pago</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>


<script>
    document.getElementById('calcularBtn').addEventListener('click', function() {
        var monto = document.getElementById('monto').value;
        var tasa = document.getElementById('tasa').value;
        var periodo = document.getElementById('periodo').value;
        calcularAmortizaciones(monto, tasa, periodo);
    });

    function calcularAmortizaciones(monto, tasa, periodo) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var amortizaciones = JSON.parse(this.responseText);
                actualizarTabla(amortizaciones);
            }
        };
        xhttp.open("POST", "/scripts/amortizacion.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("monto=" + monto + "&tasa=" + tasa + "&periodo=" + periodo);
    }

    function actualizarTabla(amortizaciones) {
        var tbody = document.getElementById('tablaAmortizaciones').getElementsByTagName('tbody')[0];
        tbody.innerHTML = ''; // Limpiar el contenido actual de la tabla
        for (var i = 0; i < amortizaciones.length; i++) {
            var row = tbody.insertRow();
            var periodoCell = row.insertCell(0);
            var saldoCell = row.insertCell(1);
            var interesCell = row.insertCell(2);
            var abonoCell = row.insertCell(3);
            var pagoCell = row.insertCell(4);

            periodoCell.innerHTML = amortizaciones[i].periodo;
            saldoCell.innerHTML = amortizaciones[i].saldo;
            interesCell.innerHTML = amortizaciones[i].interes;
            abonoCell.innerHTML = amortizaciones[i].abono;
            pagoCell.innerHTML = amortizaciones[i].pago;
        }
    }
</script>

</body>
</html>

@endsection
