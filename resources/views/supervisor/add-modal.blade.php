<!-- resources/views/add-modal.blade.php -->

<div class="modal fade" id="addSupervisorModal" tabindex="-1" aria-labelledby="addSupervisorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addSupervisorModalLabel">Add Supervisor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form fields for adding supervisor -->
                <form accept="{{ route('supervisor.store') }}" method="POST" id="addSupervisorForm">
                    @csrf
                    <div class="form-group">
                        <label for="name"  >Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="designation">Designation</label>
                        <input type="text" class="form-control" id="designation" name="designation">
                    </div>
                    <div class="form-group">
                        <label for="total_slots">Total Slots</label>
                        <input type="number" class="form-control" id="total_slots" name="total_slots">
                    </div>
                    <div class="form-group">
                        <label for="available_slots">Available Slots</label>
                        <input type="number" class="form-control" id="available_slots" name="available_slots">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="addSupervisorBtn">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
