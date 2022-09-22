@foreach ($heros as $h)
<div class="modal fade" tabindex="-1" role="dialog" id="updateData{{ $h->id }}">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="createRecord" action="{{ url('admin/home-hero/'.$h->id.'/update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Update Home-Hero</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="form-label">Dusun Krajan</label>
                        <input type="number" min="0" class="form-control" id="name" name="krajan" value="{{ $h->krajan }}">
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">Dusun Rekesan</label>
                        <input type="number" min="0" class="form-control" id="name" name="rekesan" value="{{ $h->rekesan }}">
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">Dusun Igir-igir</label>
                        <input type="number" min="0" class="form-control" id="name" name="igir" value="{{ $h->igir }}">
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach