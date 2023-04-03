

<?php $__env->startSection('title'); ?>Dashboard
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owlcarousel.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/rating.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<div class="container-fluid list-products">
	    <div class="row">
	        <!-- Individual column searching (text inputs) Starts-->
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
						<div class="row">
							<div class="col">
								<h5>List Pelanggan Doorsmeer</h5>
							</div>
							<div class="col d-flex justify-content-end">
								<?php $__env->startComponent('doorsmeer.components.pesan'); ?>
									<?php $__env->slot('jenisMobil'); ?>
										<?php $__currentLoopData = $jenisMobil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($item->id); ?>|<?php echo e($item->nama); ?>"><?php echo e($item->nama); ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									<?php $__env->endSlot(); ?>
								<?php echo $__env->renderComponent(); ?>
							</div>
						</div>
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="display table-bordered" id="basic-1">
	                            <thead>
	                                <tr>
	                                    <th scope="col" style="width:20px">No</th>
	                                    <th scope="col">Nama</th>
	                                    <th scope="col">Plat Mobil</th>
	                                    <th scope="col">Jenis Mobil</th>
	                                    <th scope="col">No Handphone</th>
	                                    <th scope="col">Tanggal</th>
	                                    <th scope="col">Total Pembayaran</th>
	                                    <th scope="col">Status</th>
	                                    <th scope="col"></th>
	                                    <th scope="col"></th>
	                                </tr>
	                            </thead>
	                            <tbody>
									
									<?php $__currentLoopData = $pesans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<td>
												<?php echo e($index + 1); ?>

											</td>
											<td>
												<?php echo e($item->nama); ?>

											</td>
											<td><?php echo e($item->plat); ?></td>
											<td><?php echo e($item->jenis_mobil); ?></td>
											<td><?php echo e($item->hp); ?></td>
											<td class="font-success"><?php echo e(date_format(date_create($item->tanggal), "d F Y")); ?></td>
											<td>Rp. <?php echo e($item->total); ?></td>
											<td>
												<?php if($item->status == 1): ?>
													<button class="btn btn-success btn-sm" type="button" data-original-title="btn btn-success btn-xs" title="">Selesai</button>
												<?php else: ?>
													<?php $__env->startComponent('doorsmeer.components.bayar'); ?>
														<?php $__env->slot('harga'); ?>
															<?php echo e($item->total); ?>

														<?php $__env->endSlot(); ?>
														<?php $__env->slot('id'); ?>
															<?php echo e($item->id); ?>

														<?php $__env->endSlot(); ?>
													<?php echo $__env->renderComponent(); ?>
												<?php endif; ?>
											</td>
											<td>
												<?php $__env->startComponent('doorsmeer.components.edit'); ?>
													<?php $__env->slot('jenisMobil'); ?>
														<?php $__currentLoopData = $jenisMobil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
															<?php if($row->id == $item->id_jenis_mobil): ?>
															<option value="<?php echo e($row->id); ?>" selected><?php echo e($row->nama); ?></option>	
															<?php else: ?>
															<option value="<?php echo e($row->id); ?>"><?php echo e($row->nama); ?></option>
															<?php endif; ?>
														<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
													<?php $__env->endSlot(); ?>
													<?php $__env->slot('nama'); ?>
														<?php echo e($item->nama); ?>

													<?php $__env->endSlot(); ?>
													<?php $__env->slot('plat'); ?>
														<?php echo e($item->plat); ?>

													<?php $__env->endSlot(); ?>
													<?php $__env->slot('hp'); ?>
														<?php echo e($item->hp); ?>

													<?php $__env->endSlot(); ?>
													<?php $__env->slot('id'); ?>
														<?php echo e($item->id); ?>

													<?php $__env->endSlot(); ?>
												<?php echo $__env->renderComponent(); ?>
											</td>
											<td>
												<form action="<?php echo e(route('hapus')); ?>" method="post">
													<?php echo csrf_field(); ?>
													<input type="hidden" name="id" value="<?php echo e($item->id); ?>">
													<button class="btn btn-danger btn-sm" type="submit" data-original-title="btn btn-success btn-xs" title="">Hapus</button>
												</form>
											</td>
										</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Individual column searching (text inputs) Ends-->
	    </div>
	</div>

	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/rating/jquery.barrating.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/rating/rating-script.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/owlcarousel/owl.carousel.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/ecommerce.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/product-list-custom.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Aplikasi\Laravel\Aplikasi_Doorsmeer\resources\views/doorsmeer/dashboard.blade.php ENDPATH**/ ?>