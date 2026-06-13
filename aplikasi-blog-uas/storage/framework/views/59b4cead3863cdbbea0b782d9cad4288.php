<?php $__env->startSection('title', 'Kelola Kategori Artikel'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h6 fw-bold mb-0">Data Kategori Artikel</h1>
    <a href="<?php echo e(route('kategori.create')); ?>" class="btn btn-sm btn-success">+ Tambah Kategori</a>
</div>
<div class="card border-0 shadow-sm"><div class="card-body p-0">
    <table class="table table-hover mb-0">
        <thead><tr><th class="px-3 py-2">No</th><th>Nama Kategori</th><th>Keterangan</th><th>Aksi</th></tr></thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td class="px-3"><?php echo e($index + 1); ?></td>
                    <td><?php echo e($item->nama_kategori); ?></td>
                    <td class="text-muted"><?php echo e($item->keterangan ?? '-'); ?></td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="<?php echo e(route('kategori.edit', $item->id)); ?>" class="btn btn-sm" style="background:#e3f2fd;color:#1565c0;">Edit</a>
                            <form action="<?php echo e(route('kategori.destroy', $item->id)); ?>" method="POST" onsubmit="return confirm('Hapus kategori ini?')">
                                <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-sm" style="background:#ffebee;color:#c62828;">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="4" class="text-center text-muted py-4">Belum ada data kategori.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\aplikasi-blog-uas\resources\views/kategori/index.blade.php ENDPATH**/ ?>