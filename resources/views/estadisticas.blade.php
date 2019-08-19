@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        	<div class="card">
	        	<div class="card-header" style="background: #353942;">
					<button type="button" onclick="window.location='/A765'" class="btn btn-outline-primary float-right">Volver</button>
	        			<p></p>
	        		<div class="container">
		        		<div class="row">
			        		<div class="col-sm-9">
			        			<h4 style="color:white;">Estadisticas de Vehiculos</h4>
				       		</div>
		        		</div>
	        		</div>
	        		<p></p>
	        	</div>
	        	<div class="card-body">
		            <table class="table table-hover">
		  				<thead class="thead-light">
		    				<tr>
						      	<th scope="col" style="text-align:center">Marca</th>
						      	<th scope="col" style="text-align:center">Conteo</th>
                                <th scope="col" style="text-align:center"></th>
		    				</tr>
				  		</thead>
				  		<tbody>
				  			@foreach($counts as $marca => $count)
				  				<tr>
								  <th style="text-align:center">{{ $marca }}</th>
								  <th style="text-align:center">{{ $count }}</th>
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
