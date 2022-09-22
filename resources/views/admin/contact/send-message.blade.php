@foreach ($messages as $c)
<div class="modal fade" tabindex="-1" role="dialog" id="updateData{{ $c->id }}">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="createRecord" action="{{ url('/admin/contact/'.$c->id.'/send-reply') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Tanggapi Pesan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="form-label">Nama Penerima</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $c->name }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">Email Penerima</label>
                        <input type="text" class="form-control" id="name" name="email"
                            value="{{ $c->email }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="name" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="name" name="subject" value="{{ $c->subject }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Pesan</label>
                        <input type="text" class="form-control" id="description" name="message"
                            placeholder="Isi pesan anda">
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
