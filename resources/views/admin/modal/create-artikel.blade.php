<div class="modal fade" tabindex="-1" role="dialog" id="addData">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="createRecord" action="{{ url('admin/artikel') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Artikel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="form-label">Judul Artikel</label>
                        <input type="text" class="form-control" id="name" name="title"
                            placeholder="Tulis nama judul anda">
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                    <div class="form-group">
                        <label>Date Time Picker</label>
                        <input type="text" class="form-control datetimepicker" name="date">
                    </div>
                    <div class="form-group">
                        <label>Gambar Artikel</label>
                        <input type="file" class="form-control" name="image">
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
