<?php $__env->startSection('title', 'Beranda Blog'); ?>

<?php $__env->startSection('content'); ?>
<div class="row g-4">
    <div class="col-lg-8">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h1 class="h5 fw-bold mb-1">Artikel Terbaru</h1>
                <p class="meta-text mb-0">Menampilkan 5 artikel terbaru dari CMS.</p>
            </div>
            <?php if($kategoriAktif): ?><a href="<?php echo e(route('pengunjung.index')); ?>" class="btn btn-sm btn-outline-secondary">Semua</a><?php endif; ?>
        </div>
        <?php $__empty_1 = true; $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <article class="content-card p-3 p-md-4 mb-3">
                <?php if($item->gambar): ?><img src="<?php echo e(asset('storage/gambar/' . $item->gambar)); ?>" alt="<?php echo e($item->judul); ?>" class="article-image mb-3"><?php endif; ?>
                <div class="mb-2"><span class="category-pill"><?php echo e($item->kategori->nama_kategori ?? 'Tanpa Kategori'); ?></span></div>
                <h2 class="h5 fw-bold mb-2"><?php echo e($item->judul); ?></h2>
                <p class="meta-text mb-3"><?php echo e($item->hari_tanggal); ?> <?php if($item->penulis): ?> oleh <?php echo e($item->penulis->nama_depan); ?> <?php echo e($item->penulis->nama_belakang); ?> <?php endif; ?></p>
                <p class="mb-3" style="color:#555;font-size:14px;line-height:1.7;"><?php echo e(\Illuminate\Support\Str::limit(strip_tags($item->isi), 220)); ?></p>
                <a href="<?php echo e(route('pengunjung.detail', $item->id)); ?>" class="btn btn-read btn-sm">Kelanjutannya</a>
            </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="content-card p-4 text-center"><p class="mb-0 text-muted">Belum ada artikel yang tersedia.</p></div>
        <?php endif; ?>
    </div>
    <aside class="col-lg-4">
        <div class="content-card p-3 p-md-4">
            <h2 class="section-title">Kategori Artikel</h2>
            <a href="<?php echo e(route('pengunjung.index')); ?>" class="sidebar-link <?php echo e(!$kategoriAktif ? 'active' : ''); ?>">Semua Kategori</a>
            <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('pengunjung.index', ['kategori' => $item->id])); ?>" class="sidebar-link <?php echo e((string) $kategoriAktif === (string) $item->id ? 'active' : ''); ?>">
                    <?php echo e($item->nama_kategori); ?> <span class="float-end text-muted"><?php echo e($item->artikel_count); ?></span>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </aside>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.pengunjung', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\aplikasi-blog-uas\resources\views/pengunjung/index.blade.php ENDPATH**/ ?>