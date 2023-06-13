<div class="menu">
            <div class="container">
                <div class="section-header text-center">
                    <p>Food Menu</p>
                    <h2>Delicious Food Menu</h2>
                </div>
                <div class="menu-tab">
                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#burgers">Burgers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#snacks">Snacks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#beverages">Beverages</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <form action="<?php echo e(url('addcart',$data->id)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div id="burgers" class="container tab-pane active">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="menu-item">
                                        
                                    <div class="menu-img">
                                            <img src="foodimage/<?php echo e($data->image); ?>" alt="Image">
                                        </div>
                                        <div class="menu-text">
                                            <h3><span><?php echo e($data->name); ?></span> <strong><?php echo e($data->price); ?>$</strong></h3>
                                            <p><?php echo e($data->description); ?></p>
                                        </div>
                                        <input  type="number" name="quantity" min="1" value="1" style="width:80px;">
                                       <input type="submit" value="Add Cart" class="btn btn-warning">
                                    </div>
                                </div>
                            </div>
                        </div>
</form>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                       <?php /**PATH E:\totorial\bruger\resources\views/user/menufood.blade.php ENDPATH**/ ?>