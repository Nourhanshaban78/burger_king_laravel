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
 <th >Name Chef</th>
 <th >Speciality</th>
 <th >Image</th>
 <th >Update</th>
 <th >Delete</th>

</tr>

<?php $__currentLoopData = $chef; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chef): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
  <td><?php echo e($chef->name); ?></td>
  <td><?php echo e($chef->speciality); ?></td>
  <td><img src="chefimage/<?php echo e($chef->image); ?>"  ></td>
  <td><a class="btn btn-info" href="<?php echo e(url('/updated_chef',$chef->id)); ?>">Update</a></td>
  <td><a class="btn btn-danger" href="<?php echo e(url('/deleted_chef',$chef->id)); ?>"
  onclick="return confirm('Are you sure to delete the message')">Delete</a></td>
  
 </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



</table>




</div>


<div>
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  </body>
</html><?php /**PATH E:\totorial\bruger\resources\views/admin/all_chefs.blade.php ENDPATH**/ ?>