<x-admin-header />

<div class="container mt-4">
    <h2>Students</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Add Student Modal Button -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStudentModal">
        Add New Student
    </button>

    <!-- Add Student Modal -->
    <div class="modal fade" id="addStudentModal" tabindex="-1" role="dialog" aria-labelledby="addStudentLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="addStudentLabel">Add New Student</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form action="{{ route('students.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        {{-- <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div> --}}
                        <input type="hidden" name="institution_id" value="1">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Course</label>
                            <input type="text" name="course" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-success mt-2">Save Student</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Students Table -->
    <div class="mt-4">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Course</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->course }}</td>
                        <td>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this student?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No students found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="d-flex justify-content-center mt-3">
            {{ $students->links('pagination::bootstrap-4') }}
        </div>
    </div>

</div>

<x-adminfooter />
