<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <style>
        .main {
            height: 100vh;
            box-sizing: border-box;
        }

        .login-box {
            width: 500px;
            padding: 20px;
            border-radius: 10px;
            
        }

        form div{
            margin-bottom: 15px;
        }
    </style>

    <div class="main d-flex flex-column justify-content-center align-items-center">
        <?php if(session('status')): ?>
            <div class="alert alert-danger" style="width: 500px; text-align:center">
                <?php echo e(session('message')); ?>

            </div>
        <?php endif; ?>
        <div class="login-box shadow-sm p-3 mb-5 bg-body-tertiary rounded">
            <h1 class="pb-1 text-center">Login</h1>
            <form action="" method="POST">
                <?php echo csrf_field(); ?>
                <div>
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control" required>
                </div>
                <div>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary form-control">Login</button>
                </div>
                <div class="text-center">
                    Belum Memiliki Akun ? <a href="register">Sign Up</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH D:\XAMPP\htdocs\perpustakaan\resources\views/login.blade.php ENDPATH**/ ?>