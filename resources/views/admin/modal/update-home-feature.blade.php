@foreach ($features as $h)
<div class="modal fade" tabindex="-1" role="dialog" id="updateData{{ $h->id }}">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="createRecord" action="{{ url('admin/home-feature/'.$h->id.'/update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Update Home-Feature</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="form-label">Jiwa</label>
                        <input type="number" min="0" class="form-control" id="name" name="jiwa" value="{{ $h->jiwa }}">
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">Luas</label>
                        <input type="number" min="0" step="0.01" class="form-control" id="name" name="luas" value="{{ $h->luas }}">
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">Pos</label>
                        <input type="number" min="0" class="form-control" id="name" name="pos" value="{{ $h->pos }}">
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