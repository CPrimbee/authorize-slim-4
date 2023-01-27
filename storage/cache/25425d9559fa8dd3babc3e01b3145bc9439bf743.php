<!Doctype html>
<html>
  <head>
    <title>
      Slim 4 Authentication
    </title>

    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
  </head>
  <body>
    <div id="app">      
      <?php echo $__env->make('sections.navigation.top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div id="content">
        <?php echo $__env->yieldContent('content'); ?>
      </div>
    </div>
    
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
  </body>
</html><?php /**PATH /home/cprimbee/Development/authorize-slim-4/resources/views/layouts/app.blade.php ENDPATH**/ ?>