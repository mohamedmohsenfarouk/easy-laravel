<!DOCTYPE html>
<html lang="en">
<head>
<?php echo $__env->make('layout.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<?php if(Route::is(['terms','tasks','tables-basic','settings','reports','register','activities','blank-page','companies','components','contacts','data-tables','deals-kanban-view','deals','email','faq','form-basic-inputs','form-horizontal','form-input-groups','form-mask','form-validation','form-vertical','leads-dashboard','leads-kanban-view','leads','mail-view','privacy-policy','projects-kanban-view','projects'])): ?>
<body id="skin-color">
<?php endif; ?>
<?php if(Route::is(['pagee','projects-dashboard'])): ?>
<body id="skin-color" class="skin-color">
<?php endif; ?>
<?php if(Route::is(['login','register'])): ?>
<body class="account-page">
<?php endif; ?>
<?php if(Route::is(['error-404','error-500'])): ?>
<body class="error-page">
<?php endif; ?>
<?php if(!Route::is(['login','register','error-404','error-500'])): ?>
<?php echo $__env->make('layout.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('layout.partials.footer-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH C:\xampp\htdocs\crms-laravel\template\resources\views/layout/mainlayout.blade.php ENDPATH**/ ?>