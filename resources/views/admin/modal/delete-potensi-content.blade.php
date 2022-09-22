@foreach ($contents as $h)
<div class="modal fade" tabindex="-1" role="dialog" id="deleteData{{ $h->id }}">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Potensi-Content</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin untuk menghapus potensi...?</p>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a class="btn btn-danger" href="{{ url('/admin/potensi-content/'.$h->id.'/delete') }}">Hapus Potensi-Content</a>
            </div>
        </div>
    </div>
</div>
@endforeach
