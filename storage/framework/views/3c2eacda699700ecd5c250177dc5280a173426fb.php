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
					
		 	<form method="POST" action="<?php echo e(route('nodo_registration')); ?>" style="margin: 0px;" class="form-inline">
		 		<?php echo csrf_field(); ?>		
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
				 						<?php $__currentLoopData = $empresas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				 							<option value="<?php echo e($nit->NIT); ?>"> <?php echo e($nit->NIT); ?> - <?php echo e($nit->nombre); ?> </option>
				 						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Machines\resources\views/nodo/create_nodo.blade.php ENDPATH**/ ?>