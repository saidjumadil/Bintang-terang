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
								<div class="row">
									<div class="col">
										@component('doorsmeer.components.karyawan.gantiPassword')
											@slot('id')
												{{Auth::user()->id}}
											@endslot
										@endcomponent
									</div>
									<div class="col">
										@component('doorsmeer.components.karyawan.tambah')
											@slot('jenisMobil')
												@foreach ($jenisMobil as $item)
													<option value="{{$item->id}}|{{$item->nama}}">{{$item->nama}}</option>
												@endforeach
											@endslot
										@endcomponent
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
									
									@foreach ($users as $index => $item)
										<tr>
											<td>
												{{$index + 1}}
											</td>
											<td>{{$item->username}}</td>
											<td>{{$item->nama}}</td>
											<td>{{$item->email}}</td>
											<td>{{$item->no_hp}}</td>
											<td>
												<div class="row">
													<div class="col d-flex justify-content-center">
														@component('doorsmeer.components.karyawan.edit')
															@slot('id')
																{{$item->id}}
															@endslot
															@slot('nama')
																{{$item->nama}}
															@endslot
															@slot('username')
																{{$item->username}}
															@endslot
															@slot('no_hp')
																{{$item->no_hp}}
															@endslot
															@slot('email')
																{{$item->email}}
															@endslot
														@endcomponent
													</div>
													<div class="col d-flex justify-content-center">
														<form action="{{route('karyawan.hapus')}}" method="post">
															@csrf
															<input type="hidden" name="id" value="{{$item->id}}">
															<button class="btn btn-danger btn-sm" type="submit" data-original-title="btn btn-success btn-xs" title="">Hapus</button>
														</form>
													</div>
												</div>
											</td>
										</tr>
									@endforeach
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