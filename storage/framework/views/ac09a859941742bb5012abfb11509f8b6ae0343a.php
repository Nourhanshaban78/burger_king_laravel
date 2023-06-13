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
    <table style="width:200 hight:200" bgcolor="gray">

<tr >
 <th style="padding:10;"> Name</th>
 <th style="padding:10;" >price</th>
 <th style="padding:10;">description</th>
 <th style="padding:10;">image</th>
 <th style="padding:10;">Delete</th>
 <th style="padding:10;">Update</th>
</tr>

<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
  <td style="padding:10;"><?php echo e($data->name); ?></td>
  <td style="padding:10;"><?php echo e($data->price); ?>$</td>
  <td style="padding:10;"><?php echo e($data->description); ?></td>
  <td style="padding:10;"><img style="width:100 hight:100"  src="foodimage/<?php echo e($data->image); ?>"> </td>
  <td><a class="btn btn-info" href="<?php echo e(url('/update_menu',$data->id)); ?>">Update</a></td>
  <td><a class="btn btn-danger" href="<?php echo e(url('/deleted',$data->id)); ?>"
  onclick="return confirm('Are you sure to delete the message')">Delete</a></td>
  
 </tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</table>




</div>


      















    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  </body>
</html><?php /**PATH E:\totorial\bruger\resources\views/admin/all_menu.blade.php ENDPATH**/ ?>