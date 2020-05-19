<?php $__env->startSection('content'); ?>
	<div  class="container">

						<div class="col-md-12" style="margin:15px; padding: 15px;">					
							<?php if(session('alert')): ?>
								<div class="alert alert-success">
								    <?php echo e(session('alert')); ?>

								</div>
							<?php endif; ?>
							<?php if($errors->any()): ?>
							    <div class="alert alert-danger">
							        <ul>
							            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							                <li><?php echo e($error); ?></li>
							            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							        </ul>
							    </div>
							<?php endif; ?>	
						</div>	

			<form method="POST" action="<?php echo e(route('device_registration')); ?>" style="margin: 0px;" class="form-horizontal">
		 		<?php echo csrf_field(); ?>		 		
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
				 						<?php $__currentLoopData = $nodos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nodo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				 							<option value="<?php echo e($nodo->id); ?>"> <?php echo e($nodo->mac); ?> </option>
				 						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
				 						<?php $__currentLoopData = $tipos_energia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				 							<option value="<?php echo e($tipo->id); ?>"> <?php echo e($tipo->tipo_energia); ?> </option>
				 						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Machines\resources\views/device/create_device.blade.php ENDPATH**/ ?>