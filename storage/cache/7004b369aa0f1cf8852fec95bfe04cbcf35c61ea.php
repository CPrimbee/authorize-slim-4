<?php echo $__env->make('sections.navigation.logo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if(Auth::check()): ?>
  <a href="/home">Home</a>
<?php endif; ?><?php /**PATH /home/cprimbee/Development/authorize-slim-4/resources/views/sections/navigation/top-left.blade.php ENDPATH**/ ?>