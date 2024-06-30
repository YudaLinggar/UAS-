

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Welcome, <?php echo e(Auth::user()->username); ?></h1>
    <div class="row my-5">
        <div class="col-lg-4 ">
            <div class="card-data book">
                <div class="row">
                    <div class="col-6"><i class="bi bi-journal-bookmark"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Buku</div>
                        <div class="card-count"><?php echo e($book_count); ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 ">
            <div class="card-data category">
                <div class="row">
                    <div class="col-6"><i class="bi bi-tags"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Kategori</div>
                        <div class="card-count"><?php echo e($category_count); ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 ">
            <div class="card-data user">
                <div class="row">
                    <div class="col-6"><i class="bi bi-person-check"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">User</div>
                        <div class="card-count"><?php echo e($user_count); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h2>#Rent Log</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>No </th>
                    <th>Pengguna</th>
                    <th>Judul Buku</th>
                    <th>Waktu peminjaman</th>
                    <th>Waktu Dikembalikan</th>
                    <th>Waktu Pengembalian</th>
                    <th>Status</th>
                </tr>
            <tbody>
                <tr>
                    <td>No data</td>
                    <td>No data</td>
                    <td>No data</td>
                    <td>No data</td>
                    <td>No data</td>
                    <td>No data</td>
                    <td>No data</td>
                </tr>
            </tbody>
            </thead>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\perpustakaan\resources\views/dashboard.blade.php ENDPATH**/ ?>