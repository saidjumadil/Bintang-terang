

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
								<div class="row">
									<div class="col">
										<?php $__env->startComponent('doorsmeer.components.karyawan.gantiPassword'); ?>
											<?php $__env->slot('id'); ?>
												<?php echo e(Auth::user()->id); ?>

											<?php $__env->endSlot(); ?>
										<?php echo $__env->renderComponent(); ?>
									</div>
									<div class="col">
										<?php $__env->startComponent('doorsmeer.components.karyawan.tambah'); ?>
											<?php $__env->slot('jenisMobil'); ?>
												<?php $__currentLoopData = $jenisMobil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<option value="<?php echo e($item->id); ?>|<?php echo e($item->nama); ?>"><?php echo e($item->nama); ?></option>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											<?php $__env->endSlot(); ?>
										<?php echo $__env->renderComponent(); ?>
									</div>
								</div>
							</div>
						</div>
	                </div>
	                <div class="card-body">
	                    <div class="table-responsive">
	                        <table class="display table-bordered" id="basic-1">
	                            <thead>
	                                <tr>
	                                    <th scope="col" style="width:20px">No</th>
	                                    <th scope="col">Username</th>
	                                    <th scope="col">Nama</th>
	                                    <th scope="col">Email</th>
	                                    <th scope="col">No Handphone</th>
	                                    <th scope="col"></th>
	                                </tr>
	                            </thead>
	                            <tbody>
									
									<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<td>
												<?php echo e($index + 1); ?>

											</td>
											<td><?php echo e($item->username); ?></td>
											<td><?php echo e($item->nama); ?></td>
											<td><?php echo e($item->email); ?></td>
											<td><?php echo e($item->no_hp); ?></td>
											<td>
												<div class="row">
													<div class="col d-flex justify-content-center">
														<?php $__env->startComponent('doorsmeer.components.karyawan.edit'); ?>
															<?php $__env->slot('id'); ?>
																<?php echo e($item->id); ?>

															<?php $__env->endSlot(); ?>
															<?php $__env->slot('nama'); ?>
																<?php echo e($item->nama); ?>

															<?php $__env->endSlot(); ?>
															<?php $__env->slot('username'); ?>
																<?php echo e($item->username); ?>

															<?php $__env->endSlot(); ?>
															<?php $__env->slot('no_hp'); ?>
																<?php echo e($item->no_hp); ?>

															<?php $__env->endSlot(); ?>
															<?php $__env->slot('email'); ?>
																<?php echo e($item->email); ?>

															<?php $__env->endSlot(); ?>
														<?php echo $__env->renderComponent(); ?>
													</div>
													<div class="col d-flex justify-content-center">
														<form action="<?php echo e(route('karyawan.hapus')); ?>" method="post">
															<?php echo csrf_field(); ?>
															<input type="hidden" name="id" value="<?php echo e($item->id); ?>">
															<button class="btn btn-danger btn-sm" type="submit" data-original-title="btn btn-success btn-xs" title="">Hapus</button>
														</form>
													</div>
												</div>
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
<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Aplikasi\Laravel\Aplikasi_Doorsmeer\resources\views/doorsmeer/karyawan.blade.php ENDPATH**/ ?>