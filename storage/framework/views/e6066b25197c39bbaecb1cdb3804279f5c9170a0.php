<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="text-align: center; font-weight: bold; font-size: 1.5em;">Menú</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="row">
                        <?php if( Auth::user()->id_permiso <= 2 ): ?>
                            <div class="col-md-6">
                                <button class="btn btn-success" type="button" style="text-align: center; font-size: 1.2em; color: white; width: 100%;" onclick="event.preventDefault(); document.getElementById('sensor-register-form').submit();"> Agregar Sensor </button>
                            </div>                        
                            <div class="col-md-6">
                                <button class="btn btn-info" type="button" style="text-align: center; font-size: 1.2em; color: white; width: 100%;" onclick="event.preventDefault(); document.getElementById('consulta-sensor-form').submit();"> Consultar Sensor </button>
                            </div>
                        <?php else: ?>
                            <div class="col-md-6 offset-md-3">
                                <button class="btn btn-info" type="button" style="text-align: center; font-size: 1.2em; color: white; width: 100%;" onclick="event.preventDefault(); document.getElementById('consulta-sensor-form').submit();"> Consultar Sensor </button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <br>
                    <div class="row">
                        <?php if( Auth::user()->id_permiso <= 2 ): ?>
                            <div class="col-md-6">
                                <button class="btn btn-success" type="button" style="text-align: center; font-size: 1.2em; color: white; width: 100%;" onclick="event.preventDefault(); document.getElementById('device-register-form').submit();"> Agregar Equipo </button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-info" type="button" style="text-align: center; font-size: 1.2em; color: white; width: 100%;" onclick="event.preventDefault(); document.getElementById('consulta-device-form').submit();"> Consultar Equipo </button>
                            </div>
                        <?php else: ?>
                            <div class="col-md-6 offset-md-3">
                                <button class="btn btn-info" type="button" style="text-align: center; font-size: 1.2em; color: white; width: 100%;" onclick="event.preventDefault(); document.getElementById('consulta-device-form').submit();"> Consultar Equipo </button>
                            </div>
                        <?php endif; ?>                        
                    </div>
                    <br>
                    <div class="row">
                        <?php if( Auth::user()->id_permiso <= 2 ): ?>
                            <div class="col-md-6">
                                <button class="btn btn-success" type="button" style="text-align: center; font-size: 1.2em; color: white; width: 100%;" onclick="event.preventDefault(); document.getElementById('nodo-register-form').submit();"> Agregar Nodo </button>
                            </div>                        
                            <div class="col-md-6">
                                <button class="btn btn-info" type="button" style="text-align: center; font-size: 1.2em; color: white; width: 100%;" onclick="event.preventDefault(); document.getElementById('consulta-nodo-form').submit();"> Consultar Nodo </button>
                            </div>
                        <?php else: ?>
                            <div class="col-md-6 offset-md-3">
                                <button class="btn btn-info" type="button" style="text-align: center; font-size: 1.2em; color: white; width: 100%;" onclick="event.preventDefault(); document.getElementById('consulta-nodo-form').submit();"> Consultar Nodo </button>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Machines\resources\views/home.blade.php ENDPATH**/ ?>