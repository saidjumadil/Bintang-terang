

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
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>
	                                        1
	                                    </td>
	                                    <td>
	                                        Said Jumadil Akbar
	                                    </td>
	                                    <td>BL 5422 KL</td>
	                                    <td>Mini Bus</td>
	                                    <td>081354132223</td>
	                                    <td class="font-success">12 February 2023</td>
	                                    <td>Rp. 65.000</td>
	                                    <td>
	                                        <button class="btn btn-success btn-xs" type="button" data-original-title="btn btn-success btn-xs" title="">Selesai</button>
	                                    </td>
	                                </tr>
									<tr>
	                                    <td>
	                                        2
	                                    </td>
	                                    <td>
	                                        Said Jumadil Akbar
	                                    </td>
	                                    <td>BL 449 MM</td>
	                                    <td>Mini Bus</td>
	                                    <td>081354132223</td>
	                                    <td class="font-success">12 February 2023</td>
	                                    <td>Rp. 65.000</td>
	                                    <td>
											<?php $__env->startComponent('doorsmeer.components.bayar'); ?>
												<?php $__env->slot('harga'); ?>
													65000
												<?php $__env->endSlot(); ?>
											<?php echo $__env->renderComponent(); ?>
	                                    </td>
	                                </tr>
									<tr>
	                                    <td>
	                                        3
	                                    </td>
	                                    <td>
	                                        Said Jumadil Akbar
	                                    </td>
	                                    <td>BL 443 RL</td>
	                                    <td>Sedan</td>
	                                    <td>081354132223</td>
	                                    <td class="font-success">12 February 2023</td>
	                                    <td>Rp. 50.000</td>
	                                    <td>
	                                        <button class="btn btn-warning btn-xs" type="button" data-original-title="btn btn-warning btn-xs" title="">Diproses</button>
	                                    </td>
	                                </tr>
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