<button class="btn btn-secondary btn-sm" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal<?php echo e($id); ?>">Diproses</button>
<div class="modal fade" id="exampleModal<?php echo e($id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pembayaran Pesanan</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="mb-3" action="<?php echo e(route('bayar')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($id); ?>">
                    <div class="mx-3">
                        <div class="col col-sm-12 ">
                            <label class="col-sm-12 col-form-label">Total Pembayaran</label>
                            <input class="form-control" type="number" name="bayar" id="bayar" placeholder="" value="<?php echo e($harga ?? ''); ?>">
                        </div>
                        <div class="modal-footer mt-3">
                            <button class="btn btn-success" id="submit" type="submit">Selesai</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\Aplikasi\Laravel\Aplikasi_Doorsmeer\resources\views/doorsmeer/components/bayar.blade.php ENDPATH**/ ?>