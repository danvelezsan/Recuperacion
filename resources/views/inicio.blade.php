@extends('layouts.app') 
@section('content')

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">

                    <div class="card-body">
                        <p class="card-text">Registrar Vehiculos</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button onclick="window.location='/A765/registrarVehiculo'" type="button" class="btn btn-secondary">Ir</button>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">

                    <div class="card-body">
                        <p class="card-text">Listar Vehiculos</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button onclick="window.location='/A765/listarVehiculos'" type="button" class="btn btn-secondary">Ir</button>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">

                    <div class="card-body">
                        <p class="card-text">Estadisticas Vehiculos</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button onclick="window.location='/A765/estadisticasVehiculos'" type="button" class="btn btn-secondary">Ir</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
