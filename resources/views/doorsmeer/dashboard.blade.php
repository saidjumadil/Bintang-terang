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
									@slot('jenisMobil')
										@foreach ($jenisMobil as $item)
											<option value="{{$item->id}}|{{$item->nama}}">{{$item->nama}}</option>
										@endforeach
									@endslot
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
	                                    <th scope="col"></th>
	                                    <th scope="col"></th>
	                                </tr>
	                            </thead>
	                            <tbody>
									
									@foreach ($pesans as $index => $item)
										<tr>
											<td>
												{{$index + 1}}
											</td>
											<td>
												{{$item->nama}}
											</td>
											<td>{{$item->plat}}</td>
											<td>{{$item->jenis_mobil}}</td>
											<td>{{$item->hp}}</td>
											<td class="font-success">{{date_format(date_create($item->tanggal), "d F Y")}}</td>
											<td>Rp. {{$item->total}}</td>
											<td>
												@if ($item->status == 1)
													<button class="btn btn-success btn-sm" type="button" data-original-title="btn btn-success btn-xs" title="">Selesai</button>
												@else
													@component('doorsmeer.components.bayar')
														@slot('harga')
															{{$item->total}}
														@endslot
														@slot('id')
															{{$item->id}}
														@endslot
													@endcomponent
												@endif
											</td>
											<td>
												@component('doorsmeer.components.edit')
													@slot('jenisMobil')
														@foreach ($jenisMobil as $row)
															@if ($row->id == $item->id_jenis_mobil)
															<option value="{{$row->id}}" selected>{{$row->nama}}</option>	
															@else
															<option value="{{$row->id}}">{{$row->nama}}</option>
															@endif
														@endforeach
													@endslot
													@slot('nama')
														{{$item->nama}}
													@endslot
													@slot('plat')
														{{$item->plat}}
													@endslot
													@slot('hp')
														{{$item->hp}}
													@endslot
													@slot('id')
														{{$item->id}}
													@endslot
												@endcomponent
											</td>
											<td>
												<form action="{{route('hapus')}}" method="post">
													@csrf
													<input type="hidden" name="id" value="{{$item->id}}">
													<button class="btn btn-danger btn-sm" type="submit" data-original-title="btn btn-success btn-xs" title="">Hapus</button>
												</form>
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