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
  <h1 >Customer Orders</h1><br>
  <form align="center" action="<?php echo e(url('search')); ?>" method="get">
    <?php echo csrf_field(); ?>
    <input type="text" name="search" style="color:black";>
    <input type="submit" value="Search" class="btn btn-outline-success">
  </form>

    <table class="table">

<tr >
 <th >Name</th>
 <th >Address</th>
 <th >Phone</th>
 <th >Food Name</th>
 <th >Price</th>
 <th >Quantity</th>
 <th>Total Price</th>

 
</tr>

<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
  <td><?php echo e($data->name); ?></td>
  <td><?php echo e($data->address); ?></td>
  <td><?php echo e($data->phone); ?></td>
  <td><?php echo e($data->foodname); ?></td>
  <td><?php echo e($data->price); ?>$</td>
  <td><?php echo e($data->quantity); ?></td>
 <td> <?php echo e($data->price * $data->quantity); ?>$</td>
  
 </tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</table>




</div>


<div>



















    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  </body>
</html><?php /**PATH E:\totorial\bruger\resources\views/admin/all_orders.blade.php ENDPATH**/ ?>