<button class="btn btn-warning btn-sm" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#edit{{$id}}">Edit</button>
<div class="modal fade" id="edit{{$id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Pesanan {{$nama}}</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="mb-3" action="{{route('edit')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$id}}">
                    <div class="mx-3">
                        <div class="col col-sm-12 ">
                            <label class="col-sm-12 col-form-label">Atas Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama" placeholder="" value="{{$nama}}" required>
                        </div>
                        <div class="col col-sm-12 ">
                            <label class="col-sm-12 col-form-label">Plat Mobil</label>
                            <input class="form-control" type="text" name="plat" id="plat" placeholder="" value="{{$plat}}" required>
                        </div>
                        <div class="col col-sm-12 ">
                            <label class="col-sm-12 col-form-label">Jenis Mobil</label>
                            {{-- {{$jenisMobil}} --}}
                            <select class="form-control" name="jenis" id="jenis">
                                <option value="">-- Pilih Jenis Mobil --</option>
                                {{$jenisMobil}}
                            </select>
                        </div>
                        <div class="col col-sm-12 ">
                            <label class="col-sm-12 col-form-label">No Handphone</label>
                            <input class="form-control" type="text" name="hp" id="hp" placeholder="" value="{{$hp}}" >
                        </div>
                        <div class="modal-footer mt-3">
                            <button class="btn btn-success" id="submit" type="submit">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>