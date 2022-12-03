
<!-- START FORM -->
<?php $__env->startSection('konten'); ?>



<form action="<?php echo e(url('mahasiswa/'.$data->nim)); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?> 
    <?php echo method_field('PUT'); ?>
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='<?php echo e(url('mahasiswa')); ?>' class="btn btn-secondary">Kembali</a>
        <div class="mb-3 row">
            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <?php echo e($data->nim); ?>

            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' value="<?php echo e($data->nama); ?>" id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='jurusan' value="<?php echo e($data->jurusan); ?>" id="jurusan">
            </div>
        </div><div class="mb-3 row">
            <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='prodi' value="<?php echo e($data->prodi); ?>" id="prodi">
            </div>
        </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name='email' value="<?php echo e($data->email); ?>" id="email">
                </div>
            </div>
            <?php if($data->foto): ?>
                <div class="mb-3">
                    <img style="max-width:100px;max-height:100px"src="<?php echo e(url('foto').'/'.$data->foto); ?>"/>
                </div>
            <?php endif; ?>
            <div class="mb-3 row">
                <label for="foto">Foto</label>
                <input type="file" name="foto" class="form-control" id="foto">
            </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>
    <!-- AKHIR FORM -->
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crudlaravel9\resources\views/mahasiswa/edit.blade.php ENDPATH**/ ?>