@foreach ($teams as $c)
<div class="modal fade" tabindex="-1" role="dialog" id="updateData{{ $c->id }}">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="createRecord" action="{{ url('admin/profile-team/'.$c->id.'/update') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Update Profile-Team</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" value="{{ $c->name }}" name="name">
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" id="name" value="{{ $c->job }}" name="job">
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" id="description" value="{{ $c->desc }}" name="desc">
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">Twitter</label>
                        <input type="text" class="form-control" id="name" value="{{ $c->twitter }}" name="twitter">
                    </div><div class="form-group">
                        <label for="name" class="form-label">Facebook</label>
                        <input type="text" class="form-control" id="name" value="{{ $c->facebook }}" name="facebook">
                    </div><div class="form-group">
                        <label for="name" class="form-label">Instagram</label>
                        <input type="text" class="form-control" id="name" value="{{ $c->instagram }}" name="instagram">
                    </div><div class="form-group">
                        <label for="name" class="form-label">Linkedin</label>
                        <input type="text" class="form-control" id="name" value="{{ $c->linkedin }}" name="linkedin">
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" class="form-control" name="image">
                        <img src="{{ asset($c->image) }}" alt="" style="height: 200px; width:400px;" class="mt-4">
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
