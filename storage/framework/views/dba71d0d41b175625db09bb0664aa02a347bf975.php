<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal">Tambah</button>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Karyawan</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="mb-3" action="<?php echo e(route('karyawan.tambah')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mx-3">
                        <div class="col col-sm-12 ">
                            <label class="col-sm-12 col-form-label">Username</label>
                            <input class="form-control" type="text" name="username" id="username" placeholder="" required>
                        </div>
                        <div class="col col-sm-12 ">
                            <label class="col-sm-12 col-form-label">Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama" placeholder="" required>
                        </div>
                        <div class="col col-sm-12 ">
                            <label class="col-sm-12 col-form-label">Email</label>
                            <input class="form-control" type="email" name="email" id="email" placeholder="">
                        </div>
                        <div class="col col-sm-12 ">
                            <label class="col-sm-12 col-form-label">No Handphone</label>
                            <input class="form-control" type="text" name="no_hp" id="no_hp" placeholder="">
                        </div>
                        <div class="modal-footer mt-3">
                            <button class="btn btn-success" id="submit" type="submit">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\Aplikasi\Laravel\Aplikasi_Doorsmeer\resources\views/doorsmeer/components/karyawan/tambah.blade.php ENDPATH**/ ?>