<!-- resources/views/add-modal.blade.php -->

<div class="modal fade" id="addUserdataModal" tabindex="-1" aria-labelledby="addUserdataModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserdataModalLabel">Add Announcement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
         
                <form action="{{ route('announcement.store') }}" method="POST" id="addUserdataForm">
                    @csrf
                    <div class="form-group">
                        <label for="message">Message</label>
                        <input type="text" class="form-control" id="message" name="message">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="addUserdataBtn">Save Announcement</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
