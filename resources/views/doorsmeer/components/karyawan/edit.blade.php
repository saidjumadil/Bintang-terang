<button class="btn btn-warning btn-sm" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal{{$id}}">Edit</button>
<div class="modal fade" id="exampleModal{{$id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Karyawan {{$nama}}</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="mb-3" action="{{route('karyawan.edit')}}" method="POST">
                    @csrf
                    <div class="mx-3">
                        <input type="hidden" name="id" value="{{$id}}">
                        <div class="col col-sm-12 ">
                            <label class="col-sm-12 col-form-label">Username</label>
                            <input class="form-control" type="text" name="username" id="username" value="{{$username}}" placeholder="" required>
                        </div>
                        <div class="col col-sm-12 ">
                            <label class="col-sm-12 col-form-label">Nama</label>
                            <input class="form-control" type="text" name="nama" id="nama" value="{{$nama}}" placeholder="" required>
                        </div>
                        <div class="col col-sm-12 ">
                            <label class="col-sm-12 col-form-label">Email</label>
                            <input class="form-control" type="email" name="email" id="email" value="{{$email}}" placeholder="">
                        </div>
                        <div class="col col-sm-12 ">
                            <label class="col-sm-12 col-form-label">No Handphone</label>
                            <input class="form-control" type="text" name="no_hp" id="no_hp" value="{{$no_hp}}" placeholder="">
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