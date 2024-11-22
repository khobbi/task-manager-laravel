<?php $__env->startSection('content'); ?>
    <h1>Task Details</h1>
    <div class="mb-3">
        <strong>Title:</strong>
        <p><?php echo e($task->title); ?></p>
    </div>
    <div class="mb-3">
        <strong>Description:</strong>
        <p><?php echo e($task->description ?? 'No description provided.'); ?></p>
    </div>
    <a href="<?php echo e(route('tasks.index')); ?>" class="btn btn-secondary">Back to List</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/edon/Documents/web devs/laraprojects/task-manager/resources/views/tasks/show.blade.php ENDPATH**/ ?>