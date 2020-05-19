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

			<form method="POST" action="{{ route('device_registration') }}" style="margin: 0px;" class="form-horizontal">
		 		@csrf		 		
		 		<div class="col-md-12" style="margin:15px; background-color: white; border-radius: 15px; border-style: solid; border-width: thin; border-color: lightgray; padding: 15px;">
				  	<div class="col-md-12" >
				    	<h3 style="text-align: center;"> Agregar Equipo </h3>
				    	<br>
				    	<div class="row">
				      		<div class="form-group col-md-4">
				      			
				      				<label for="dispositivo">Nodo Relacionado</label>
				      			
				      			<div class="col-md-12">
				      				<select class="form-control" name="nodo" id="nodo" required="true" style="width: 100%">
				 						<option value="0"> Seleccione </option>
				 						@foreach($nodos as $nodo)
				 							<option value="{{ $nodo->id }}"> {{ $nodo->mac }} </option>
				 						@endforeach
				 					</select>
			 					</div>
			 				</div>

							<div class="form-group col-md-4">
								
									<label for="nombre">Nombre/Ubicacion</label>
																	
								<div class="col-md-12">	
									<input type="text" name="nombre" id="nombre" placeholder="Nombre del Equipo" required="true" class="form-control">
				 				</div>		
			 				</div>

			 				<div class="form-group col-md-4">
								
									<label for="serial">Serial</label>
																	
								<div class="col-md-12">	
									<input type="text" name="serial" id="serial" placeholder="Número serial dispositivo" required="true" class="form-control">
				 				</div>		
			 				</div>
						</div>
						<div class="row" >
			 				<div class="form-group col-md-4">
			 					
			 						<label for="nombre">Cantidad de Sensores</label>
			 					
			 					<input type="text" name="sensores" id="sensores" placeholder="Sensores" required="true" class="form-control">
							</div>
							
			 				<div class="form-group col-md-4">
								
									<label for="tipo">Tipo de Equipo</label>
																	
								<div class="col-md-12">	
									<select class="form-control" name="tipo" id="tipo" required="true" style="width: 100%">
				 						<option value=""> Seleccione </option>
				 						@foreach($tipos_energia as $tipo)
				 							<option value="{{ $tipo->id }}"> {{ $tipo->tipo_energia }} </option>
				 						@endforeach
				 					</select>		 					
				 				</div>		
			 				</div>

			 				<div class="form-group col-md-4">
								
									<label for="puerto">Puerto</label>
																
								<div class="col-md-12">			 					
				 					<input type="text" name="puerto" id="puerto" placeholder="Puerto Comunicación" required="true" class="form-control">
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