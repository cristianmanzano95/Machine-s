<?php $__env->startSection('content'); ?>

	<div class="container">
        <p>
            <?php echo e($data-> total()); ?> registros |
                pag <?php echo e($data-> currentPage()); ?>

                de <?php echo e($data-> lastPage()); ?>

        </p>                  
        <table class="table table-hover">
            <thead>
               	<th>Nombre</th>
                <th>Nodo</th>
                <th>Fecha Creación</th>
            </thead>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                   	<td>
                   		<p><?php echo e($device->nombre); ?></p>
                   	</td>
                   	<td>
                   		<p><?php echo e($device->id_nodo); ?></p>
                   	</td>
                   	<td>
                   		<p><?php echo e($device->created_at); ?></p>
                   	</td>                   			
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
        </table>
        <?php echo $data-> render(); ?>

    </div>

<?php $__env->stopSection(); ?>	

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Machines\resources\views/device/consulta_device.blade.php ENDPATH**/ ?>