<!-- Modal -->
<div class="modal fade" id="editModal-{{ $userdata->id }}" tabindex="-1" role="dialog"
    aria-labelledby="editModalLabel-{{ $userdata->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel-{{ $userdata->id }}">Edit Announcement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm-{{ $userdata->id }}" method="POST"
                    action="{{ route('announcement.update', ['id' => $userdata->id]) }}">
                    @csrf
                    <input type="hidden" id="editId" name="id" value="{{ $userdata->id }}">

                    <div class="form-group">
                        <label for="editName">name</label>
                        <input type="text" class="form-control" id="message" name="message"
                            value="{{ $userdata->message }}">
                    </div>
                  

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
