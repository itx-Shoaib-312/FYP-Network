<!-- resources/views/add-modal.blade.php -->

<div class="modal fade" id="addUserdataModal" tabindex="-1" aria-labelledby="addUserdataModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserdataModalLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form fields for adding supervisor -->
                <form accept="{{ route('data.store') }}" method="POST" id="addUserdataForm">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="string" class="form-control" id="password" name="password">
                    </div>

                    <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control" id="role" name="role" required>
                            <!-- Populate dropdown with roles -->
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" id="aridNoField" style="display: none;">
                        <label for="arid_no">Arid no</label>
                        <input type="text" class="form-control" name="arid_no" id="arid_no"
                            placeholder="xx-ARID-xxxx"
                            title="Please enter in the format 'xx-ARID-xxxx'">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="addUserdataBtn">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById("role").addEventListener("change", function () {
        var selectedRoleId = this.value;
        var aridNoField = document.getElementById("aridNoField");
        if (selectedRoleId === "2")
        {
            aridNoField.style.display = "block";
            document.getElementById("arid_no").required = true; // Make the field required
        }
         else
          {
            aridNoField.style.display = "none";
            document.getElementById("arid_no").required = false; // Remove the required attribute
        }
    });
</script>
