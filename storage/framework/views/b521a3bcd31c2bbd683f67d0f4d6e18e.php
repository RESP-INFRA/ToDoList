<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-lg-11">

            <h2>ToDo List</h2>

        </div>

        <div class="col-lg-1">
            <a class="btn btn-success" href="<?php echo e(url('projet/create')); ?>">Ajouter une tache</a>
        </div>

    </div>

 

    <?php if($message = Session::get('success')): ?>

        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>

    <?php endif; ?>

 

    <table class="table table-bordered">

        <tr>

            <th>No</th>
            <th>Tache</th>

        </tr>

        <?php $__currentLoopData = $projets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $projet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td><?php echo e($index); ?></td>
                <td><?php echo e($projet->tache); ?></td>
                <td>

                    <form action="<?php echo e(url('projet/'. $projet->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <a class="btn btn-info" href="<?php echo e(url('projet/'. $projet->id)); ?>">Afficher</a>
                        <a class="btn btn-primary" href="<?php echo e(url('projet/'. $projet->id .'/edit')); ?>">Modifier</a>

                        <button type="submit" class="btn btn-danger">Supprimer</button>

                    </form>
                </td>

            </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\HP\Projetgit\resources\views/projet/index.blade.php ENDPATH**/ ?>