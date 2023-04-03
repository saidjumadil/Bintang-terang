<button class="btn btn-secondary btn-sm" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#ganti">Ganti Password</button>
<div class="modal fade" id="ganti" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ganti Password</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="mb-3" action="{{route('password.update')}}" method="POST">
                    @csrf
                    <div class="mx-3">
                        <input type="hidden" name="id" value="{{$id}}">
                        <div class="col col-sm-12 ">
                            <label class="col-sm-12 col-form-label">Password Lama</label>
                            <input class="form-control" type="password" name="password" id="password" placeholder="" required>
                        </div>
                        <div class="col col-sm-12 ">
                            <label class="col-sm-12 col-form-label">Password Baru</label>
                            <input class="form-control" type="password" name="new_password" id="new_password" placeholder="" required>
                        </div>
                        <div class="col col-sm-12 ">
                            <label class="col-sm-12 col-form-label">Konfirmasi Password Lama</label>
                            <input class="form-control" type="password" name="konfirmasi" id="konfirmasi" placeholder="" required>
                        </div>
                        <div class="modal-footer mt-3">
                            <button class="btn btn-success" id="submit" type="submit">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>