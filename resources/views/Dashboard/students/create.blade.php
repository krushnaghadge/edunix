<x-admin-header />

<div class="container mt-4">
    <h2>Add New Student</h2>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control">
        </div>

        <div class="form-group">
            <label>Course</label>
            <input type="text" name="course" class="form-control">
        </div>

        <button type="submit" class="btn btn-success mt-2">Add Student</button>
    </form>
</div>

<x-adminfooter />
