<?php $__env->startSection('title', 'Kelola Penulis'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h6 fw-bold mb-0">Data Penulis</h1>
    <a href="<?php echo e(route('penulis.create')); ?>" class="btn btn-sm btn-success">+ Tambah Penulis</a>
</div>
<div class="card border-0 shadow-sm"><div class="card-body p-0">
    <table class="table table-hover mb-0">
        <thead><tr><th class="px-3 py-2">Foto</th><th>Nama</th><th>Username</th><th>Aksi</th></tr></thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $penulis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td class="px-3"><img src="<?php echo e(asset('storage/foto/' . $item->foto)); ?>" alt="Foto" style="width:40px;height:40px;object-fit:cover;border-radius:6px;border:1px solid #e9ecef;"></td>
                    <td><?php echo e($item->nama_depan); ?> <?php echo e($item->nama_belakang); ?></td>
                    <td class="text-muted"><?php echo e($item->user_name); ?></td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="<?php echo e(route('penulis.edit', $item->id)); ?>" class="btn btn-sm" style="background:#e3f2fd;color:#1565c0;">Edit</a>
                            <form action="<?php echo e(route('penulis.destroy', $item->id)); ?>" method="POST" onsubmit="return confirm('Hapus penulis ini?')">
                                <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-sm" style="background:#ffebee;color:#c62828;">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr><td colspan="4" class="text-center text-muted py-4">Belum ada data penulis.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\aplikasi-blog-uas\resources\views/penulis/index.blade.php ENDPATH**/ ?>