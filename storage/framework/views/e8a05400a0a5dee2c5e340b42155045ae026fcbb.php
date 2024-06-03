
<?php $__env->startSection('content'); ?>
    <title>Thêm mới danh mục sản phẩm</title>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 style="margin-left:15px">
                Thêm mới danh mục sản phẩm
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo e(route('admin.index')); ?>">Trang chủ</a></li>
                <li><a href="<?php echo e(route('admin.category.index')); ?>">Danh mục</li>
                >
                <li><a href="#">Thêm mới</a></li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="" method="POST" role="form" class="col-md-8">
                <?php echo csrf_field(); ?>
                <div class="form-group <?php echo e($errors->first('c_name') ? ' has-error':''); ?>">
                    <label for="exampleInputEmail1">Danh mục</label>
                    <input type="text" name="c_name" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp">
                    <?php if($errors->first('c_name')): ?>
                        <p class="text-danger"><?php echo e($errors->first('c_name')); ?>  </p>
                    <?php endif; ?>
                </div>
                <div class="form-group <?php echo e($errors->first('c_cate') ? ' has-error':''); ?>">

                    <label for="exampleInputPassword1">Thể loại</label>
                    <select name="c_cate" class="form-control" id="exampleInputPassword1">
                        <option value="">--Chọn thể loại sản phẩm--</option>
                        <option value="watch">Máy lọc nước</option>
                        <option value="glass">Thiết bị lọc nước</option>
                        <option value="accessories">Thiết bị đo</option>

                    </select>
                    <?php if($errors->first('c_cate')): ?>
                        <p class="text-danger"><?php echo e($errors->first('c_cate')); ?>  </p>
                    <?php endif; ?>
                </div>
                <a href="<?php echo e(route('admin.category.index')); ?>" class="btn btn-danger">Quay lại</a>
                <button type="submit" class="btn btn-primary">Lưu</button>
            </form>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project\locnuoc2\resources\views/admin/category/create.blade.php ENDPATH**/ ?>