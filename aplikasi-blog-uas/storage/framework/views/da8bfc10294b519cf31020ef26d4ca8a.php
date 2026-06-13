<?php $__env->startSection('title', $artikel->judul); ?>

<?php $__env->startSection('content'); ?>
<div class="row g-4">
    <div class="col-lg-8">
        <article class="content-card p-3 p-md-4">
            <div class="mb-3"><span class="category-pill"><?php echo e($artikel->kategori->nama_kategori ?? 'Tanpa Kategori'); ?></span></div>
            <h1 class="h3 fw-bold mb-2"><?php echo e($artikel->judul); ?></h1>
            <p class="meta-text mb-3"><?php echo e($artikel->hari_tanggal); ?> <?php if($artikel->penulis): ?> oleh <?php echo e($artikel->penulis->nama_depan); ?> <?php echo e($artikel->penulis->nama_belakang); ?> <?php endif; ?></p>
            <?php if($artikel->gambar): ?><img src="<?php echo e(asset('storage/gambar/' . $artikel->gambar)); ?>" alt="<?php echo e($artikel->judul); ?>" class="detail-image mb-4"><?php endif; ?>
            <div class="article-body"><?php echo e($artikel->isi); ?></div>
            <div class="mt-4 pt-3 border-top"><a href="<?php echo e(route('pengunjung.index')); ?>" class="btn btn-sm btn-outline-secondary">Kembali ke Beranda</a></div>
        </article>
    </div>
    <aside class="col-lg-4">
        <div class="content-card p-3 p-md-4">
            <h2 class="section-title">Artikel Terkait</h2>
            <?php $__empty_1 = true; $__currentLoopData = $artikelTerkait; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <a href="<?php echo e(route('pengunjung.detail', $item->id)); ?>" class="sidebar-link mb-1">
                    <span class="d-block fw-semibold"><?php echo e(\Illuminate\Support\Str::limit($item->judul, 52)); ?></span>
                    <span class="meta-text"><?php echo e($item->hari_tanggal); ?></span>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p class="text-muted mb-0" style="font-size:13px;">Belum ada artikel terkait.</p>
            <?php endif; ?>
        </div>
    </aside>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.pengunjung', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\aplikasi-blog-uas\resources\views/pengunjung/detail.blade.php ENDPATH**/ ?>