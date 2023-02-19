@extends('layouts.admin.master')

@section('title')Dashboard
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/rating.css')}}">
@endpush

@section('content')
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
								@component('doorsmeer.components.pesan')
								@endcomponent
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
											@component('doorsmeer.components.bayar')
												@slot('harga')
													65000
												@endslot
											@endcomponent
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

	@push('scripts')
	<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/rating/jquery.barrating.js')}}"></script>
    <script src="{{asset('assets/js/rating/rating-script.js')}}"></script>
    <script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/js/ecommerce.js')}}"></script>
    <script src="{{asset('assets/js/product-list-custom.js')}}"></script>
	@endpush

@endsection