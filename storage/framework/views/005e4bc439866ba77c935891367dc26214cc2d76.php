<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="medium-12 large-12 columns">
      <h4>Users</h4>
      <div class="medium-2  columns"><a class="button hollow success" href="<?php echo e(route('new_user')); ?>">ADD NEW USER</a></div>

      <!--<pre> </pre> -->

      <table class="stack">
        <thead>
        <tr>
          <th width="200">User Name</th>
          <th width="200">Name</th>
          <th width="200">Email</th>
          <th width="200">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($user->user_name); ?></td>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td>
              <a class="hollow button" href="<?php echo e(route('show_user', ['user_id' => $user->id])); ?>">EDIT</a>
              <!--<a class="hollow button warning" href="">BOOK A ROOM</a>-->
            </td>

          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
      </table>


    </div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>