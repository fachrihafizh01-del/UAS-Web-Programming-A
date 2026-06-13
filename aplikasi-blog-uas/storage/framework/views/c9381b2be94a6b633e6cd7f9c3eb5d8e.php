<?php $__env->startSection('title', 'Edit Artikel'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-3"><h1 class="h6 fw-bold mb-0">Edit Artikel</h1><a href="<?php echo e(route('artikel.index')); ?>" class="btn btn-sm btn-light">Kembali</a></div>
<div class="card border-0 shadow-sm"><div class="card-body p-4">
    <form action="<?php echo e(route('artikel.update', $artikel->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>
        <?php echo $__env->make('artikel.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="d-flex justify-content-end gap-2"><a href="<?php echo e(route('artikel.index')); ?>" class="btn btn-sm btn-light">Batal</a><button class="btn btn-sm btn-success">Simpan Perubahan</button></div>
    </form>
</div></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\aplikasi-blog-uas\resources\views/artikel/edit.blade.php ENDPATH**/ ?>