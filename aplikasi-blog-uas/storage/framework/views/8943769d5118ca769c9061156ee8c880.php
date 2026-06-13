<?php $__env->startSection('title', 'Tambah Kategori'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h6 fw-bold mb-0">Tambah Kategori</h1>
    <a href="<?php echo e(route('kategori.index')); ?>" class="btn btn-sm btn-light">Kembali</a>
</div>
<div class="card border-0 shadow-sm"><div class="card-body p-4">
    <form action="<?php echo e(route('kategori.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo $__env->make('kategori.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="d-flex justify-content-end gap-2">
            <a href="<?php echo e(route('kategori.index')); ?>" class="btn btn-sm btn-light">Batal</a>
            <button class="btn btn-sm btn-success">Simpan Data</button>
        </div>
    </form>
</div></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\aplikasi-blog-uas\resources\views/kategori/create.blade.php ENDPATH**/ ?>