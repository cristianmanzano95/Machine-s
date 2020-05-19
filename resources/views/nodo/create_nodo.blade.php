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
					
		 	<form method="POST" action="{{ route('nodo_registration') }}" style="margin: 0px;" class="form-inline">
		 		@csrf		
		 		<div class="col-md-12" style="margin:15px; background-color: white; border-radius: 15px; border-style: solid; border-width: thin; border-color: lightgray; padding: 15px;">
				  	<div class="col-md-12" >
				    	<h3 style="text-align: center;"> Agregar Nodo </h3>
				    	<br>
				    	<div class="row">
				      		<div class="form-group col-md-4">
				      			
				      				<label for="ip">Ip del nodo</label>
				      			
				      			<div class="col-md-12">
			 						<input type="text" name="ip" id="ip" placeholder="Ip del nodo" required="true" class="form-control">
			 					</div>
			 				</div>
									 				
			 				<div class="form-group col-md-4">
			 					
			 						<label for="serial">S/N del nodo</label>
			 					
			 					<div class="col-md-12">	
			 						<input type="text" name="serial" id="serial" placeholder="Número serial nodo" required="true" class="form-control">
			 					</div>	
							</div>
							
							<div class="form-group col-md-4">
								
									<label for="NIT"> Empresa</label>
																		
								<div class="col-md-12">			 					
				 					<select class="form-control" name="NIT" id="NIT" required="true" style="width: 100%">
				 						<option value="0"> Seleccione </option>
				 						@foreach($empresas as $nit)
				 							<option value="{{ $nit->NIT }}"> {{ $nit->NIT }} - {{ $nit->nombre }} </option>
				 						@endforeach
				 					</select>
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
