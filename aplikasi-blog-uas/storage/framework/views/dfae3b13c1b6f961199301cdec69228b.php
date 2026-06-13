<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login CMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f4f4f9;">
    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="card border-0 shadow-sm" style="max-width:420px;width:100%;border-radius:8px;">
            <div class="card-body p-4">
                <h1 class="h5 fw-bold mb-1">Login CMS Blog</h1>
                <p class="text-muted small mb-4">Masuk sebagai penulis untuk mengelola konten.</p>
                <?php if(session('sukses')): ?><div class="alert alert-success"><?php echo e(session('sukses')); ?></div><?php endif; ?>
                <?php if(session('gagal')): ?><div class="alert alert-danger"><?php echo e(session('gagal')); ?></div><?php endif; ?>
                <form action="<?php echo e(route('login.proses')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Username</label>
                        <input type="text" name="user_name" class="form-control <?php $__errorArgs = ['user_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('user_name')); ?>" autofocus>
                        <?php $__errorArgs = ['user_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Password</label>
                        <input type="password" name="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <button class="btn btn-success w-100" type="submit">Masuk</button>
                    <a href="<?php echo e(route('pengunjung.index')); ?>" class="btn btn-link w-100 mt-2">Lihat halaman pengunjung</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\aplikasi-blog-uas\resources\views/login/index.blade.php ENDPATH**/ ?>