<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Blog Publik'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background:#f4f4f9; color:#212529; font-family:Arial, sans-serif; }
        .topbar { background:#2C3E50; color:#fff; padding:14px 0; }
        .brand-title { font-size:16px; font-weight:700; margin:0; }
        .brand-subtitle { color:#cfd8dc; font-size:12px; margin:0; }
        .page-wrap { padding:28px 0; }
        .content-card { background:#fff; border:1px solid #eef0f2; border-radius:8px; box-shadow:0 4px 18px rgba(44,62,80,.06); }
        .article-image { width:100%; height:220px; object-fit:cover; border-radius:8px; border:1px solid #eef0f2; }
        .detail-image { width:100%; max-height:420px; object-fit:cover; border-radius:8px; border:1px solid #eef0f2; }
        .meta-text { color:#868e96; font-size:12px; }
        .category-pill { display:inline-block; background:#e8f5e9; color:#2e7d32; border-radius:6px; font-size:12px; font-weight:700; padding:5px 9px; }
        .section-title { color:#333; font-size:16px; font-weight:700; margin-bottom:14px; }
        .sidebar-link { color:#555; display:block; font-size:13px; padding:10px 12px; text-decoration:none; border-left:3px solid transparent; border-radius:6px; }
        .sidebar-link:hover, .sidebar-link.active { background:#e8f5e9; border-left-color:#4CAF50; color:#2e7d32; font-weight:700; }
        .btn-read { background:#4CAF50; border-color:#4CAF50; color:#fff; font-size:13px; font-weight:700; }
        .btn-read:hover { background:#2e7d32; border-color:#2e7d32; color:#fff; }
        .article-body { color:#444; font-size:15px; line-height:1.8; white-space:pre-line; }
    </style>
</head>
<body>
    <header class="topbar">
        <div class="container">
            <p class="brand-title">Sistem Manajemen Blog</p>
            <p class="brand-subtitle">Halaman Pengunjung</p>
        </div>
    </header>
    <main class="page-wrap"><div class="container"><?php echo $__env->yieldContent('content'); ?></div></main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\laragon\www\aplikasi-blog-uas\resources\views/layouts/pengunjung.blade.php ENDPATH**/ ?>