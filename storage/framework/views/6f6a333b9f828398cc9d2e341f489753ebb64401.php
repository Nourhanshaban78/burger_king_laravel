<!DOCTYPE html>
<html lang="en">
    <head>
        <base herf="/public"> 
        <meta charset="utf-8">
        <title>Burger King - Food Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    </head>

    <body>
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">Burger <span>King</span></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="<?php echo e(url('/home')); ?>" class="nav-item nav-link active">Home</a>
                        <a href="<?php echo e(url('/about')); ?>" class="nav-item nav-link">About</a>
                        <a href="<?php echo e(url('/feature')); ?>" class="nav-item nav-link">Feature</a>
                        <a href="<?php echo e(url('/chef')); ?>" class="nav-item nav-link">Chef</a>
                        <a href="<?php echo e(url('/menu')); ?>" class="nav-item nav-link">Menu</a>
                        <a href="<?php echo e(url('/book')); ?>" class="nav-item nav-link">Booking</a>
                        <a href="" class="nav-item nav-link">
                            <?php if(auth()->guard()->check()): ?>
                            <a href="<?php echo e(url('/showcart',Auth::User()->id)); ?>">
                        Cart<?php echo e($count); ?>

                        </a>

                        <?php endif; ?>
                        <?php if(auth()->guard()->guest()): ?>
                        Cart[0]
                        <?php endif; ?>

                        </a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu">
                                <a href="<?php echo e(url('/blog')); ?>" class="dropdown-item">Blog Grid</a>
                                <a href="<?php echo e(url('/single')); ?>" class="dropdown-item">Blog Detail</a>
                            </div>
                        </div>
                        <a href="<?php echo e(url('/contact')); ?>" class="nav-item nav-link">Contact</a>
                    </div>

           
                        </div>

                </div>
            </div>
        </div>



</div>

       <div style="padding-top:100px;" align="center">
 <table class="table">

<tr >
 <th style="padding:10;">Food Name</th>
 <th style="padding:10;" >price</th>
 <th style="padding:10;">Quantity</th>
 
 
</tr>
<form action="<?php echo e(url('/orderconfirm')); ?>" method="post" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
  <td style="padding:10;">
  <input type="text" name="foodname[] " value=" <?php echo e($data->name); ?>" hidden="">
  <?php echo e($data->name); ?></td>
  <td style="padding:10;">
  <input type="text" name="price[] " value=" <?php echo e($data->price); ?>" hidden="">
  <?php echo e($data->price); ?>$</td>
  <td style="padding:10;">
  <input type="text" name="quantity[] " value=" <?php echo e($data->quantity); ?>" hidden="">
  <?php echo e($data->quantity); ?></td>
  
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<?php $__currentLoopData = $data2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr style="position:relative; ">
<th style="padding:10;">Action</th>
<td></td>
<td style="padding:10;"><a href="<?php echo e(url('/remove',$data2->id)); ?>" class="btn btn-danger" 
  onclick="return confirm('Are you sure to delete the Order')">Remove</a></td>
  
  </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>


<div align="center" style="padding:10px;">
<button  class="btn btn-info btn-lg" id="order" type="button">
    Order Now
</button>
</div>

<div id="appear" align="center" style="padding:10px; display:none;">
    <div style="padding:10px;"  class="mb-3">

    <label> Name </label>
     <input type="text" name="name" placeholder="Your Name"> 
    </div>

<div style="padding:10px;"  class="mb-3">
<label> Address </label>
 <input type="text" name="address" placeholder="Your Address"> 
</div>

 <div style="padding:10px;"  class="mb-3">
    <label> Phone </label>
     <input type="text" name="phone" placeholder="Your Phone"> 
    </div>

    <div style="padding:10px;">
 <input type="submit" value="Order Confirm" class="btn btn-success"> 
 <button id="close" class="btn btn-danger " type="button">Close</button>
</div>

</div>

</form>
</div>









       
      


       
        














<script type="text/javascript">
          $("#order").click(
            function(){
                $('#appear').show();
            }
          );
          $("#close").click(
            function(){
                $('#appear').hide();
            }
          );

</script>

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/tempusdominus/js/moment.min.js"></script>
        <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
        <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
<?php /**PATH E:\totorial\bruger\resources\views/user/showcart.blade.php ENDPATH**/ ?>