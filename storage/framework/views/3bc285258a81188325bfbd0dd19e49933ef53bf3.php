<?php $__env->startSection('content'); ?>

<div class="container">

<div class="row">
<div class="col-8">
        <img src="/storage/<?php echo e($post->image); ?>" alt="" class="w-100">
        </div>

        <div class="col-4">
        <div>
        <div class="d-flex align-items-center">
        <div class="p-3">
            <img src="<?php echo e($post->user->profile->profileImage()); ?>" alt="" class="w-100 rounded-circle" style="max-width:45px">
           </div>
           <div>
                <div class="font-weight-bold"><a class="text-dark" href="/profile/<?php echo e($post->user->id); ?>"><?php echo e($post->user->username); ?></a>
                <a class="pl-3" href="">Follow </a>
                </div>

           </div>
           </div>
           <hr>

            <p ><span class="font-weight-bold"><a class="text-dark" href="/profile/<?php echo e($post->user->id); ?>"><?php echo e($post->user->username); ?> </a> </span><?php echo e($post->caption); ?> </p>
                 </div>
        </div>
</div>

 </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bart/uczenie/resources/views/posts/show.blade.php ENDPATH**/ ?>