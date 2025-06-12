<?php $__env->startSection('content'); ?>

    <h1>ToDo List</h1>


    <table class="table table-bordered">

        <tr>
            <th>Tache:</th>
            <td><?php echo e($projet->tache); ?></td>
        </tr>


    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\HP\Projetgit\resources\views/projet/show.blade.php ENDPATH**/ ?>