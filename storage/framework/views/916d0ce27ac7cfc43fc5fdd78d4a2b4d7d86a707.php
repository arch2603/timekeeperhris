<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4><?php echo e($modify == 1 ? 'Modify User' : 'New User'); ?></h4>
            <form action="<?php echo e($modify == 1 ? route('update_user', ['user_id' => 1]) : route('create_user')); ?>" method="post">
                <div class="medium-4  columns">
                    <label>User Name</label>
                    <input name="user_name" type="text" value="<?php echo e(old('user_name')); ?>">
                    <small class="error"><?php echo e($errors->first('user_name')); ?></small>
                </div>
                <div class="medium-4  columns">
                    <label>Name</label>
                    <input name="name" type="text" value="<?php echo e(old('name')); ?>">
                    <small class="error"><?php echo e($errors->first('name')); ?></small>
                </div>

                <div class="medium-12  columns">
                    <label>Email</label>
                    <input name="email" type="text" value="<?php echo e(old('email')); ?>">
                    <small class="error"><?php echo e($errors->first('email')); ?></small>
                </div>
                <div class="medium-12  columns">
                    <label>Password</label>
                    <input name="password" type="password" value="<?php echo e(old('password')); ?>">
                    <small class="error"><?php echo e($errors->first('password')); ?></small>
                </div>
                <div class="medium-12  columns">
                    <label>Confirm Password</label>
                    <input name="password_confirmation" type="password" value="<?php echo e(old('password_confirmation')); ?>">
                    <small class="error"><?php echo e($errors->first('password_confirmation')); ?></small>
                </div>
                <div class="medium-12  columns">
                    <input value="SAVE" class="button success hollow" type="submit">
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>