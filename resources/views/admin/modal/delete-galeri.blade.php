@foreach ($galeri as $h)
<div class="modal fade" tabindex="-1" role="dialog" id="deleteData{{ $h->id }}">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Galeri</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda yakin untuk menghapus galeri...?</p>
                <img src="{{ asset($h->image) }}" alt="" style="height: 200px; width:400px;" class="mt-4">
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a class="btn btn-danger" href="{{ url('/admin/galeri/'.$h->id.'/delete') }}">Hapus Galeri</a>
            </div>
        </div>
    </div>
</div>
@endforeach
