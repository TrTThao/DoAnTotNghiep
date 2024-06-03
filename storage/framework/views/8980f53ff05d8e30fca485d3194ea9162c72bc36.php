
<?php $__env->startSection('content'); ?>
    <title>Sửa thông tin từ khóa</title>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 style="margin-left:15px">
                Sửa thông tin từ khóa
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo e(route('admin.index')); ?>">Trang chủ</a></li>
                <li><a href="<?php echo e(route('admin.keyword.index')); ?>">Từ khóa</li>
                >
                <li><a href="#"> Cập nhật </a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="" method="POST" role="form" class="col-md-8">
                <?php echo csrf_field(); ?>
                <div class="form-group <?php echo e($errors->first('k_name') ? ' has-error':''); ?>">
                    <label for="exampleInputEmail1">Từ khóa</label>
                    <input type="text" name="k_name" class="form-control" id="exampleInputEmail1"
                           value="<?php echo e($keyword->k_name); ?>" aria-describedby="emailHelp">
                    <?php if($errors->first('k_name')): ?>
                        <p class="text-danger"><?php echo e($errors->first('k_name')); ?>  </p>
                    <?php endif; ?>
                </div>

                <div class="form-group <?php echo e($errors->first('k_description') ? ' has-error':''); ?>">
                    <label for="exampleInputEmail">Mô tả</label>
                    <input type="text" name="k_description" class="form-control" id="exampleInputEmail"
                           value="<?php echo e($keyword->k_description); ?>" aria-describedby="emailHelp">
                    <?php if($errors->first('k_description')): ?>
                        <p class="text-danger"><?php echo e($errors->first('k_description')); ?>  </p>
                    <?php endif; ?>
                </div>
                <a href="<?php echo e(route('admin.keyword.index')); ?>" class="btn btn-danger">Quay lại</a>
                <button type="submit" class="btn btn-primary">Lưu</button>
            </form>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project\locnuoc2\resources\views/admin/keyword/update.blade.php ENDPATH**/ ?>