<?php $__env->startSection('main'); ?>
<div class="card">
    <div class="card-body">
      <h1>Form Tambah Data Buku</h1>
    <form action="/buku/store" method="post">
        <?php echo e(csrf_field()); ?>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Kode Buku</label>
            <input name="kodebuku" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan kode buku">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Judul Buku</label>
            <input name="judul" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan judul buku">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Gambar</label>
            <input name="gambar" class="form-control" type="file" id="formFile">
          </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Pengarang</label>
            <input name="pengarang" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan pengarang buku">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Penerbit</label>
            <input name="penerbit" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukkan penerbit buku">
        </div>
        <input type="hidden" name="created_at" value="<?php echo date('Y-m-d h:i:s'); ?>">
        <input type="hidden" name="updated_at" value="<?php echo date('Y-m-d h:i:s'); ?>">
        <input type="submit" value="Simpan Data">
    </form>
    </div>
  </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uasweb\resources\views/pages/form_data.blade.php ENDPATH**/ ?>