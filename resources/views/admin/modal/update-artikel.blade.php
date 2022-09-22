@foreach ($artikel as $a)
<div class="modal fade" tabindex="-1" role="dialog" id="updateData{{ $a->id }}">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="createRecord" action="{{ url('admin/artikel/'.$a->id.'/update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Update Artikel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="form-label">Judul Artikel</label>
                        <input type="text" class="form-control" id="name" name="title"
                            placeholder="Tulis nama judul anda" value="{{ $a->title }}">
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ $a->description }}">
                    </div>
                    <div class="form-group">
                        <label>Date Time Picker</label>
                        <input type="text" class="form-control datetimepicker" name="date" value="{{ $a->date }}">
                    </div>
                    <div class="form-group">
                        <label>Gambar Artikel</label>
                        <input type="file" class="form-control" name="image">
                        <img src="{{ asset($a->image) }}" alt="" style="height: 200px; width:400px;" class="mt-4">
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