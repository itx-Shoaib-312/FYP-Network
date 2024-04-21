<!-- Modal -->
<div class="modal fade" id="editModal-{{ $supervisor->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel-{{ $supervisor->id }}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel-{{ $supervisor->id }}">Edit Supervisor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm-{{ $supervisor->id }}" method="POST" action="{{ route('supervisor.update', ['id' => $supervisor->id]) }}">
                    @csrf
                    <input type="hidden" id="editId" name="id" value="{{ $supervisor->id }}">

                    <div class="form-group">
                        <label for="editName">Name</label>
                        <input type="text" class="form-control" id="editName" name="name" value="{{ $supervisor->name }}">
                    </div>
                    <div class="form-group">
                        <label for="editDesignation">Designation</label>
                        <input type="text" class="form-control" id="editDesignation" name="designation" value="{{ $supervisor->designation }}">
                    </div>
                    <div class="form-group">
                        <label for="editTotalSlots">Total Slots</label>
                        <input type="number" class="form-control" id="editTotalSlots" name="total_slots" value="{{ $supervisor->total_slots }}">
                    </div>
                    <div class="form-group">
                        <label for="editAvailableSlots">Available Slots</label>
                        <input type="number" class="form-control" id="editAvailableSlots" name="available_slots" value="{{ $supervisor->available_slots }}">
                    </div>
                    <div class="form-group">
                        <label for="editStatus">Status</label>
                        <select class="form-control" id="editStatus" name="status">
                            <option value="0" @if($supervisor->Status == 0) selected @endif>Unselected</option>
                            <option value="1" @if($supervisor->Status == 1) selected @endif>Selected</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
