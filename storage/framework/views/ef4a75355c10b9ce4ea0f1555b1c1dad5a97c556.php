<?php $__env->startSection('content'); ?>

	<div class="container">
        <p>
            <?php echo e($data-> total()); ?> registros |
                pag <?php echo e($data-> currentPage()); ?>

                de <?php echo e($data-> lastPage()); ?>

        </p>                  
        <table class="table table-hover">
            <thead>
               	<th>IP</th>
                <th>MAC</th>
                <th>Fecha Creación</th>
            </thead>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nodo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tbody>
                   	<td>
                   		<p><?php echo e($nodo->nodo_ip); ?></p>
                   	</td>
                   	<td>
                   		<p><?php echo e($nodo->mac); ?></p>
                   	</td>
                   	<td>
                   		<p><?php echo e($nodo->created_at); ?></p>
                   	</td>                   			
                </tbody>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
        </table>
        <?php echo $data-> render(); ?>

    </div>

<?php $__env->stopSection(); ?>	

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Machines\resources\views/nodo/consulta_nodo.blade.php ENDPATH**/ ?>