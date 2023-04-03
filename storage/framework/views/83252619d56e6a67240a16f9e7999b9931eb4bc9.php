<button class="btn btn-warning btn-sm" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal<?php echo e($id); ?>">Edit</button>
<div class="modal fade" id="exampleModal<?php echo e($id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Karyawan <?php echo e($nama); ?></h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="mb-3" action="<?php echo e(route('karyawan.edit')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mx-3">
                        <input type="hidden" name="id" value="<?php echo e($id); ?>">
                        <div class="col col-sm-12 ">
                            <label class="col-sm-12 col-form-label">Username</label>
                            <input class="form-control" type="text" name="username" id="username" value="<?php echo e($username); ?>" placeholder="" required>
                        </div>
                        <div class="col col-sm-12 ">
                            <label class="col-sm-12 col-form-label">Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama" value="<?php echo e($nama); ?>" placeholder="" required>
                        </div>
                        <div class="col col-sm-12 ">
                            <label class="col-sm-12 col-form-label">Email</label>
                            <input class="form-control" type="email" name="email" id="email" value="<?php echo e($email); ?>" placeholder="">
                        </div>
                        <div class="col col-sm-12 ">
                            <label class="col-sm-12 col-form-label">No Handphone</label>
                            <input class="form-control" type="text" name="no_hp" id="no_hp" value="<?php echo e($no_hp); ?>" placeholder="">
                        </div>
                        <div class="modal-footer mt-3">
                            <button class="btn btn-success" id="submit" type="submit">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\Aplikasi\Laravel\Aplikasi_Doorsmeer\resources\views/doorsmeer/components/karyawan/edit.blade.php ENDPATH**/ ?>