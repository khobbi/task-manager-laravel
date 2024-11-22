<?php $__env->startSection('content'); ?>
    <h1>Edit Task</h1>
    <form action="<?php echo e(route('tasks.update', $task->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo e($task->title); ?>" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"><?php echo e($task->description); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/edon/Documents/web devs/laraprojects/task-manager/resources/views/tasks/edit.blade.php ENDPATH**/ ?>