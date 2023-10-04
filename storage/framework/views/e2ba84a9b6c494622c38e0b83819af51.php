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

  <div>

    <form action="<?php echo e(url('/uploadchef')); ?>" method="post" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>

        <div>

        <label>Name</label>
        <input style="color: blue" type="text" name="name" placeholder="Enter a name" required>
        
        </div>
        
        <div>

        <label>Speciality</label>
        <input style="color: blue" type="text" name="speciality" placeholder="Enter the speciality" required>

        </div>
        
        <div>
        <input type="file" name="image" required>

        </div>

        <input style="color: blue" type="submit" value="Save">
    </form>


  </div>

    <div>
  <table bgcolor="black">
    <tr>
        <th style="padding: 30px">Name</th>
        <th style="padding: 30px">Speciality</th>
        <th style="padding: 30px">Image</th>
        <th style="padding: 30px">Action</th>
        <th style="padding: 30px">Action2</th>
    </tr>

    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr align="center">
        <td><?php echo e($data->name); ?></td>
        <td><?php echo e($data->speciality); ?></td>
        <td><img height="100" width="100" src="/chefimage/<?php echo e($data->image); ?>"></td>
        <td><a href="<?php echo e(url('/updatechef', $data->id)); ?>">Update</a></td>
        <td><a href="<?php echo e(url('/deletechef', $data->id)); ?>">Delete</a></td>
        
    </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>

</div>


    </div>

  <?php echo $__env->make("admin.adminscript", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

    
  </body>
</html><?php /**PATH C:\Users\Samwel Kahungwa\Desktop\restaurant\resources\views/admin/adminchef.blade.php ENDPATH**/ ?>