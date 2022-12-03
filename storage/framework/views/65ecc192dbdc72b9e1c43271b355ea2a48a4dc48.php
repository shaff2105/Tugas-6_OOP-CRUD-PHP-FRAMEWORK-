
<!-- START DATA -->
<?php $__env->startSection('konten'); ?>
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
      <form class="d-flex" action="<?php echo e(url('mahasiswa')); ?>" method="get">
          <input class="form-control me-1" type="search" name="katakunci" value="<?php echo e(Request::get('katakunci')); ?>" placeholder="Masukkan kata kunci" aria-label="Search">
          <button class="btn btn-secondary" type="submit">Cari</button>
      </form>
    </div>
    
    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
      <a href='<?php echo e(url('mahasiswa/create')); ?>' class="btn btn-primary">+ Tambah Data</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Prodi</th>
                <th>Email</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = $data->firstItem() ?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($i); ?></td>
                <td><?php echo e($item->nim); ?></td>
                <td><?php echo e($item->nama); ?></td>
                <td><?php echo e($item->jurusan); ?></td>
                <td><?php echo e($item->prodi); ?></td>
                <td><?php echo e($item->email); ?></td>
                <td>
                    <?php if($item->foto): ?>
                         
                    <img style="max-width:100px; max-height:100px"
                    src="<?php echo e(url('foto').'/'.$item->foto); ?>"/>    
                
                    <?php endif; ?>
                </td>
                <td>
                    <a href='<?php echo e(url('mahasiswa/'.$item->nim.'/edit')); ?>' class="btn btn-warning btn-sm">Edit</a>
                    <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="<?php echo e(url('mahasiswa/'.$item->nim)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                    </form>
                </td>
            </tr>
            <?php $i++ ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </tbody>
    </table>
    <?php echo e($data->withQueryString()->links()); ?>

</div>
          <!-- AKHIR DATA -->
<?php $__env->stopSection(); ?>
        

<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crudlaravel9\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>