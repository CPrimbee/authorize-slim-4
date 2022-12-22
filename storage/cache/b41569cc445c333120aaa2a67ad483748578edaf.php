<?php $__env->startSection('content'); ?>
  <div style='padding:10px'>
    <p>
      Home Page <?php echo e(env('NON_EXISTING_ENV_VALUE', 'Value Default To Me!!')); ?>

    </p>
  </div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cprimbee/Development/authorize-slim-4/resources/views/auth/home.blade.php ENDPATH**/ ?>