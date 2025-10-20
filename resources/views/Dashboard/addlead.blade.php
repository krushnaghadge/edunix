<x-admin-header />

<div class="container mt-4">
    <h2>Enquiries</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Button to open modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addEnquiryModal">
        Add New Enquiry
    </button>

    <!-- Modal -->
    <div class="modal fade" id="addEnquiryModal" tabindex="-1" role="dialog" aria-labelledby="addEnquiryLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="addEnquiryLabel">Add New Enquiry</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form action="{{ route('enquiries.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Student Name</label>
                            <input type="text" name="student_name" class="form-control" required>
                        </div>
                        <input type="hidden" name="institution_id" value="1">
                        <div class="form-group">
                            <label>Parent Name</label>
                            <input type="text" name="parent_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="text" name="contact_number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Source</label>
                            <select name="source" class="form-control" required>
                                <option value="website">Website</option>
                                <option value="phone">Phone</option>
                                <option value="walk-in">Walk-in</option>
                                <option value="campaign">Campaign</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Remarks</label>
                            <textarea name="remarks" class="form-control"></textarea>
                        </div>

                        <button type="submit" class="btn btn-success mt-2">Add Enquiry</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Enquiry List Table -->
    <div class="mt-4">
        <h4>Enquiry List</h4>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>Parent Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Source</th>
                    <th>Remarks</th>
                    <th>Status</th>
                    {{-- <th>Created At</th> --}}
                </tr>
            </thead>
            <tbody>
                @forelse($enquiries as $enquiry)
                    <tr>
                        <td>{{ $enquiry->id }}</td>
                        <td>{{ $enquiry->student_name }}</td>
                        <td>{{ $enquiry->parent_name }}</td>
                        <td>{{ $enquiry->contact_number }}</td>
                        <td>{{ $enquiry->email }}</td>
                        <td>{{ ucfirst($enquiry->source) }}</td>
                        <td>{{ $enquiry->remarks }}</td>
                        <td>{{ ucfirst($enquiry->status) }}</td>
                        {{-- <td>{{ $enquiry->created_at->format('d-m-Y') }}</td> --}}
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center">No enquiries found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Bootstrap Pagination -->
        <div class="d-flex justify-content-center mt-3">
            {{ $enquiries->links('pagination::bootstrap-4') }}
        </div>
    </div>

</div>

<x-adminfooter />
