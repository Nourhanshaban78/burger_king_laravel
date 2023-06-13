<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php echo $__env->make('admin.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
    
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
      <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid page-body-wrapper">
  <div style="padding-top:100px;" align="center">
    <table class="table">

<tr >
 <th > Name</th>
 <th >Email</th>
 <th >Phone</th>
 <th >Date</th>
 <th >Time</th>
 <th> Guest</th>
</tr>

<?php $__currentLoopData = $guests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guests): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
  <td><?php echo e($guests->name); ?></td>
  <td><?php echo e($guests->email); ?></td>
  <td><?php echo e($guests->phone); ?></td>
  <td><?php echo e($guests->date); ?></td>
  <td><?php echo e($guests->time); ?></td>
  <td><?php echo e($guests->guest); ?></td>
 </tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</table>




</div>


<div>
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  </body>
</html><?php /**PATH E:\totorial\bruger\resources\views/admin/all_guest.blade.php ENDPATH**/ ?>