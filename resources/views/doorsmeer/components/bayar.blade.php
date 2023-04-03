<button class="btn btn-secondary btn-sm" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal{{$id}}">Diproses</button>
<div class="modal fade" id="exampleModal{{$id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pembayaran Pesanan</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="mb-3" action="{{route('bayar')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$id}}">
                    <div class="mx-3">
                        <div class="col col-sm-12 ">
                            <label class="col-sm-12 col-form-label">Total Pembayaran</label>
                            <input class="form-control" type="number" name="bayar" id="bayar" placeholder="" value="{{ $harga ?? '' }}">
                        </div>
                        <div class="modal-footer mt-3">
                            <button class="btn btn-success" id="submit" type="submit">Selesai</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>