@extends('layouts.app')

@section('content')
	<div  class="container">

						<div class="col-md-12" style="margin:15px; padding: 15px;">					
							@if (session('alert'))
								<div class="alert alert-success">
								    {{ session('alert') }}
								</div>
							@endif
							@if ($errors->any())
							    <div class="alert alert-danger">
							        <ul>
							            @foreach ($errors->all() as $error)
							                <li>{{ $error }}</li>
							            @endforeach
							        </ul>
							    </div>
							@endif	
						</div>	
		
		 	<form method="POST" action="{{ route('sensor_registration') }}" style="margin: 0px;" class="form-horizontal">
		 		@csrf		 		
		 		<div class="col-md-12" style="margin:15px; background-color: white; border-radius: 15px; border-style: solid; border-width: thin; border-color: lightgray; padding: 15px;">
				  	<div class="col-md-12" >
				    	<h3 style="text-align: center;"> Agregar Sensor </h3>
				    	<br>
				    	<div class="row">
				      		<div class="form-group col-md-6">
				      			
				      				<label for="dispositivo">Equipo Relacionado</label>
				      			
				      			<div class="col-md-12">
				      				<select class="form-control" name="dispositivo" id="dispositivo" required="true" style="width: 100%">
				 						<option value=""> Seleccione </option>
				 						@foreach($devices as $device)
				 							<option value="{{ $device->id }}"> {{ $device->mac }} - {{ $device->nombre }} </option>
				 						@endforeach
				 					</select>
			 					</div>
			 				</div>

			 				<div class="form-group col-md-6">
								
									<label for="marca">Marca</label>
																	
								<div class="col-md-12">	
									<select class="form-control" name="marca" id="marca" required="true" style="width: 100%">
				 						<option value=""> Seleccione </option>
				 						@foreach($marcas as $marca)
				 							<option value="{{ $marca->id }}"> {{ $marca->codigo }} - {{ $marca->nombre }}</option>
				 						@endforeach
				 					</select>	
				 				</div>		
			 				</div>
						</div>
						<div class="row" >
			 				<div class="form-group col-md-4">
			 					
			 						<label for="rango">Rango de Medida</label>
			 					
			 					<div class="col-md-12">	
			 						<input type="text" name="rango" id="rango" placeholder="Rango de medida" required="true" class="form-control" >
			 					</div>	
							</div>
							
			 				<div class="form-group col-md-4">
								
									<label for="sensibilidad">Sensibilidad</label>
																	
								<div class="col-md-12">			 					
				 					<input type="text" name="sensibilidad" id="sensibilidad" placeholder="Sensibilidad" required="true" class="form-control">
				 				</div>		
			 				</div>

			 				<div class="form-group col-md-4">
								
									<label for="resolucion">Resolución</label>
																
								<div class="col-md-12">			 					
				 					<input type="text" name="resolucion" id="resolucion" placeholder="Resolución" required="true" class="form-control" >
				 				</div>		
			 				</div>
			 			</div>
		 				<br>
		 				<center>
			 				<button type="submit" class="btn btn-primary" style="width: 75%;"> Crear </button>
			 			</center>        		
				  	</div>
				</div> 	
		 	</form>
		
	</div>
@endsection