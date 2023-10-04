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
    
  <base href="/public">
    
  <?php echo $__env->make("admin.admincss", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

  </head>
  <body>

  <div class="container-scroller">
    
  <?php echo $__env->make("admin.navbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

  <div style="position: relative ; top: 60px ; right: -150px">

  <form action="<?php echo e(url('/update', $data->id)); ?>" method="post" enctype="multipart/form-data">

            <?php echo csrf_field(); ?>

                <div>
                    <label>Title</label>
                    <input style="color:blue" type="text" name="title" value="<?php echo e($data->title); ?>" required>
                </div>

                <div>
                    <label>Price</label>
                    <input style="color:blue" type="number" name="price" value="<?php echo e($data->price); ?>" required>
                </div>

       
                <div>
                    <label>Description</label>
                    <input style="color:blue" type="text" name="description" value="<?php echo e($data->description); ?>" required>
                </div>

                <div>
                    <label>Old Image</label>
                    <img height="200" width="200" src="/foodimage/<?php echo e($data->image); ?>">
                </div>

                <div>
                    <label>New Image</label>
                    <input type="file" name="image" required>
                </div>



                <div>
                    
                    <input type="submit" value="Update" >
                </div>


            </form>


  </div>


    </div>

  <?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

    
  </body>
</html><?php /**PATH C:\Users\Samwel Kahungwa\Desktop\restaurant\resources\views/admin/updateview.blade.php ENDPATH**/ ?>