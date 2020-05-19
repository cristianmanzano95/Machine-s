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
		
		 	<form method="POST" action="<?php echo e(route('sensor_registration')); ?>" style="margin: 0px;" class="form-horizontal">
		 		<?php echo csrf_field(); ?>		 		
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
				 						<?php $__currentLoopData = $devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				 							<option value="<?php echo e($device->id); ?>"> <?php echo e($device->mac); ?> - <?php echo e($device->nombre); ?> </option>
				 						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				 					</select>
			 					</div>
			 				</div>

			 				<div class="form-group col-md-6">
								
									<label for="marca">Marca</label>
																	
								<div class="col-md-12">	
									<select class="form-control" name="marca" id="marca" required="true" style="width: 100%">
				 						<option value=""> Seleccione </option>
				 						<?php $__currentLoopData = $marcas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				 							<option value="<?php echo e($marca->id); ?>"> <?php echo e($marca->codigo); ?> - <?php echo e($marca->nombre); ?></option>
				 						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Machines\resources\views/sensor/create_sensor.blade.php ENDPATH**/ ?>