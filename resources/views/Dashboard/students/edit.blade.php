<x-admin-header />

<div class="container mt-4">
    <h2>Edit Student</h2>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $student->name }}" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $student->email }}">
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $student->phone }}">
        </div>

        <div class="form-group">
            <label>Course</label>
            <input type="text" name="course" class="form-control" value="{{ $student->course }}">
        </div>

        <button type="submit" class="btn btn-success mt-2">Update Student</button>
    </form>
</div>

<x-adminfooter />
