<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan | <?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
  </head>
  <body>

    <div class="main d-flex flex-column justify-content-between">
        <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Perpustakaan</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
             
            </div>
          </nav>
          <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarTogglerDemo02">
                        <?php if(Auth::user()->role_id == 1): ?>
                        <a href="dashboard" <?php if(request()->route()->uri == 'dashboard'): ?> class = 'active'<?php endif; ?>>Dashboard</a>
                        <a href="books" <?php if(request()->route()->uri == 'books'): ?> class = 'active'<?php endif; ?>>Buku</a>
                        <a href="categories" <?php if(request()->route()->uri == 'categories'): ?> class = 'active'<?php endif; ?>>Kategori</a>
                        <a href="users" <?php if(request()->route()->uri == 'users'): ?> class = 'active'<?php endif; ?>>Pengguna</a>
                        <a href="rentlog" <?php if(request()->route()->uri == 'rentlog'): ?> class = 'active'<?php endif; ?>>Log</a>
                        <a href="logout">Logout</a>
                        <?php else: ?>
                        <a href="profile" <?php if(request()->route()->uri == 'profile'): ?> class = 'active'<?php endif; ?>>Profile</a>
                        <a href="logout" <?php if(request()->route()->uri == 'rentlog'): ?> class = 'active'<?php endif; ?>>Logout</a>
                        <?php endif; ?>
                </div>
                <div class="content p-5 col-lg-10">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
  </body>
</html><?php /**PATH D:\XAMPP\htdocs\perpustakaan\resources\views/layout/mainlayout.blade.php ENDPATH**/ ?>