<?php $__env->startSection('content'); ?>
  <div style='padding:10px'>
    <p>
      Home Page

      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <pre>
          <?php echo e($user->name); ?> <?php echo e($user->email); ?> <?php echo e($user->password); ?>

        </pre>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </p>
  </div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cprimbee/Development/authorize-slim-4/resources/views/auth/home.blade.php ENDPATH**/ ?>