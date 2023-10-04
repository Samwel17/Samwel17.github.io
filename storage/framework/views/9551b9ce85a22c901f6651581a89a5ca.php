<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
  <?php echo $__env->make("admin.admincss", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

  </head>
  <body>
  <div class="container-scroller">
    
  <?php echo $__env->make("admin.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

    <div style="position: relative ; top: 60px ; right: -150px">

            <form action="<?php echo e(url('/uploadfood')); ?>" method="post" enctype="multipart/form-data">

            <?php echo csrf_field(); ?>

                <div>
                    <label>Title</label>
                    <input style="color:blue" type="text" name="title" placeholder="Write a title" required>
                </div>

                <div>
                    <label>Price</label>
                    <input style="color:blue" type="number" name="price" placeholder="Input price" required>
                </div>

                <div>
                    <label>Image</label>
                    <input type="file" name="image" required>
                </div>

                <div>
                    <label>Description</label>
                    <input style="color:blue" type="text" name="description" placeholder="Write a description" required>
                </div>

                <div>
                    
                    <input type="submit" value="Save" >
                </div>


            </form>

            <div>

                <table bgcolor="grey">
                    <tr>
                        <th style="padding: 30px">Food name</th>
                        <th style="padding: 30px">Price</th>
                        <th style="padding: 30px">Description</th>
                        <th style="padding: 30px">Image</th>
                        <th style="padding: 30px">Action</th>
                        <th style="padding: 30px">Action 2</th>
                    </tr>

                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr align="center">
                        <td><?php echo e($data->title); ?></td>
                        <td><?php echo e($data->price); ?></td>
                        <td><?php echo e($data->description); ?></td>
                        <td ><img height="200" width="200" src="/foodimage/<?php echo e($data->image); ?>"></td>
                        <td><a href="<?php echo e(url('/deletemenu', $data->id)); ?>">Delete</a></td>
                        <td><a href="<?php echo e(url('/updateview', $data->id)); ?>">Update</a></td>
                    </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>


            </div>



    </div>

  


    </div>

  <?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

    
  </body>
</html><?php /**PATH C:\Users\Samwel Kahungwa\Desktop\restaurant\resources\views/admin/foodmenu.blade.php ENDPATH**/ ?>