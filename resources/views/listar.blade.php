@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
				@if (session()->has('registrado'))
			    <div class="container">
				    <div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>	
	        		    <span class="glyphicon glyphicon-ok"><strong>¡La persona y el vehiculo han sido registrados exitosamente!</strong>
				    </div>
			    </div>
			    @endif
        	<div class="card">
	        	<div class="card-header" style="background: #353942;">
					<button type="button" onclick="window.location='/A765'" class="btn btn-outline-primary float-right">Volver</button>
	        			<p></p>
	        		<div class="container">
		        		<div class="row">
			        		<div class="col-sm-9">
			        			<h4 style="color:white;">Listar Vehiculos</h4>
				       		</div>
		        		</div>
	        		</div>
	        		<p></p>
	        	</div>
	        	<div class="card-body">
		            <table class="table table-hover">
		  				<thead class="thead-light">
		    				<tr>
						      	<th scope="col" style="text-align:center">Placa</th>
						      	<th scope="col" style="text-align:center">Marca</th>
                                <th scope="col" style="text-align:center"></th>
		    				</tr>
				  		</thead>
				  		<tbody>
				  			@foreach($vehiculos as $vehiculo)
				  				<tr>
                                    @if ($vehiculo -> marca == "Mazda")
                                    <th style="text-align:center"> {{ $vehiculo -> placa }} <span style="color:green"> Los de Mazda son los mejores </span>
                                    </th> 
                                    @elseif ($vehiculo -> marca == "Toyota")
                                    <th scope="col" style="text-align:center">
                                        <div style="background:red">
                                            <div style="color:black">{{ $vehiculo -> placa }}</div>                           
                                        </div>                                
                                    </th>
									@else
									<td style="text-align:center">{{ $vehiculo -> placa }}</td>
                                    @endif
                                    <th style="text-align:center">{{ $vehiculo -> marca }}</th>
				  					</td>
				  				</tr>
				  			@endforeach
		  				</tbody>
					</table>
				</div>
			</div>
        </div>
    </div>
</div>
@endsection
