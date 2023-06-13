<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <?php echo $__env->make('admin.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
    
    <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid page-body-wrapper">
     
     <div  class="container"  style="padding-top:100px;">
 
         <form action="<?php echo e(url('/chef-updates-chef',$chef->id)); ?>" method="post" enctype="multipart/form-data">
         
           <?php echo csrf_field(); ?>
             
             <div  > <label> Name of Chef </label>
                 <input type="text" name="name"style="color:black;" value="<?php echo e($chef->name); ?>" require ></div>

                 
                 <div > <label> Speciality </label>
                 <input type="text" name="speciality"style="color:black;"  value="<?php echo e($chef->speciality); ?>" require></div>
 
                 

                 <div> <label>Old Image </label>
                 <img hight=150px; width=150px; src="chefimage/<?php echo e($chef->image); ?>" > </div>
 
                 <div > <label>New Image </label>
                 <input type="file" name="image" style="width:200px;" ></div>
 
                 <div style="padding:15px;"> 
                 <input type="submit" value="Updated Chefs" class="btn btn-info" ></div>
                 
 
         </form>
 
         
     </div>
 
           
     </div>
     


      

    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
  </body>
</html><?php /**PATH E:\totorial\bruger\resources\views/admin/updatechef.blade.php ENDPATH**/ ?>