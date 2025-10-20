<x-admin-header />

<div class="container mt-4">
    <h2>Teachers</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Add Teacher Modal Button -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addTeacherModal">
        Add New Teacher
    </button>

    <!-- Add Teacher Modal -->
    <div class="modal fade" id="addTeacherModal" tabindex="-1" role="dialog" aria-labelledby="addTeacherLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="addTeacherLabel">Add New Teacher</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form action="{{ route('teachers.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Institution</label>
                            <select name="institution_id" class="form-control" required>
                                @foreach(\App\Models\Institution::all() as $institution)
                                    <option value="{{ $institution->id }}">{{ $institution->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>User</label>
                            <select name="user_id" class="form-control" required>
                                @foreach(\App\Models\User::all() as $user)
                                    <option value="{{ $user->id }}">{{ $user->fullname }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Department</label>
                            <input type="text" name="department" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Designation</label>
                            <input type="text" name="designation" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="text" name="contact_number" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Joining Date</label>
                            <input type="date" name="joining_date" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success mt-2">Save Teacher</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Edit Teacher Modal -->
    <div class="modal fade" id="editTeacherModal" tabindex="-1" role="dialog" aria-labelledby="editTeacherLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="editTeacherLabel">Edit Teacher</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form id="editTeacherForm">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="teacher_id" id="edit_teacher_id">

                        <div class="form-group">
                            <label>Institution</label>
                            <select name="institution_id" id="edit_institution_id" class="form-control" required>
                                @foreach(\App\Models\Institution::all() as $institution)
                                    <option value="{{ $institution->id }}">{{ $institution->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>User</label>
                            <select name="user_id" id="edit_user_id" class="form-control" required>
                                @foreach(\App\Models\User::all() as $user)
                                    <option value="{{ $user->id }}">{{ $user->fullname }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Department</label>
                            <input type="text" name="department" id="edit_department" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Designation</label>
                            <input type="text" name="designation" id="edit_designation" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="text" name="contact_number" id="edit_contact_number" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Joining Date</label>
                            <input type="date" name="joining_date" id="edit_joining_date" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" id="edit_status" class="form-control">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success mt-2">Update Teacher</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Teachers Table -->
    <div class="mt-4">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Institution</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Contact</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->user->fullname }}</td>
                        <td>{{ $teacher->institution->name }}</td>
                        <td>{{ $teacher->department }}</td>
                        <td>{{ $teacher->designation }}</td>
                        <td>{{ $teacher->contact_number }}</td>
                        <td>{{ ucfirst($teacher->status) }}</td>
                        <td>
                            <button class="btn btn-sm btn-warning editBtn" data-id="{{ $teacher->id }}">Edit</button>

                            <form action="{{ route('teachers.destroy', $teacher->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this teacher?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">No teachers found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="d-flex justify-content-center mt-3">
            {{ $teachers->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>

<x-adminfooter />

<!-- AJAX Script -->
<script>
$(document).ready(function() {
    // Click edit button
    $('.editBtn').click(function() {
        var teacherId = $(this).data('id');
        $.get('/teachers/' + teacherId + '/edit', function(data) {
            $('#edit_teacher_id').val(data.id);
            $('#edit_institution_id').val(data.institution_id);
            $('#edit_user_id').val(data.user_id);
            $('#edit_department').val(data.department);
            $('#edit_designation').val(data.designation);
            $('#edit_contact_number').val(data.contact_number);
            $('#edit_joining_date').val(data.joining_date);
            $('#edit_status').val(data.status);
            $('#editTeacherModal').modal('show');
        });
    });

    // Submit update via AJAX
    $('#editTeacherForm').submit(function(e) {
        e.preventDefault();
        var teacherId = $('#edit_teacher_id').val();
        var formData = $(this).serialize();

        $.ajax({
            url: '/teachers/' + teacherId,
            method: 'PUT',
            data: formData,
            success: function(response) {
                location.reload(); // reload page after update
            },
            error: function(err) {
                alert('Error updating teacher');
            }
        });
    });
});
</script>
    