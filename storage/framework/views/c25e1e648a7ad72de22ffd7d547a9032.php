<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Tasks</h1>
        <a href="<?php echo e(route('tasks.create')); ?>" class="btn btn-primary">Add Task</a>
    </div>

    <?php if($tasks->isEmpty()): ?>
        <p>No tasks available.</p>
    <?php else: ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($task->id); ?></td>
                        <td><?php echo e($task->title); ?></td>
                        <td>
                            <a href="<?php echo e(route('tasks.show', $task->id)); ?>" class="btn btn-info btn-sm">View</a>
                            <a href="<?php echo e(route('tasks.edit', $task->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <form action="<?php echo e(route('tasks.destroy', $task->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/edon/Documents/web devs/laraprojects/task-manager/resources/views/tasks/index.blade.php ENDPATH**/ ?>