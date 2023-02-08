<?php $__env->startSection('main'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Buku Perpustakaan</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
            <a class="btn btn-primary" href="http://localhost:8000/buku/tambah" role="button"><i class="fas fa-fw fa-plus"></i> Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode Buku</th>
                            <th>Judul Buku</th>
                            <th>gambar</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Kode Buku</th>
                            <th>Judul Buku</th>
                            <th>gambar</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($b->kodebuku); ?></td>
                            <td><?php echo e($b->judul); ?></td>
                            <td><img height="200" width="130" src="/user/img/buku/<?php echo e($b->gambar); ?>"></td>
                            <td><?php echo e($b->pengarang); ?></td>
                            <td><?php echo e($b->penerbit); ?></td>
                            <td>
                                <a class="btn btn-outline-primary" href="/buku/edit/<?php echo e($b->id); ?>" role="button"><i class="fas fa-fw fa-edit"></i></a>
                                |
                                <a class="btn btn-outline-danger" href="/buku/hapus/<?php echo e($b->id); ?>" role="button"><i class="fas fa-fw fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?php $__env->stopSection(); ?>



<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uasweb\resources\views/pages/buku.blade.php ENDPATH**/ ?>