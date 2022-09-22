<div class="modal fade" tabindex="-1" role="dialog" id="addData">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="createRecord" action="{{ url('admin/home-hero') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Home-Hero</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="form-label">Dusun Krajan</label>
                        <input type="number" min="0" class="form-control" id="name" name="krajan">
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">Dusun Rekasan</label>
                        <input type="number" min="0" class="form-control" id="name" name="rekesan">
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">Dusun Igir-igir</label>
                        <input type="number" min="0" class="form-control" id="name" name="igir">
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
