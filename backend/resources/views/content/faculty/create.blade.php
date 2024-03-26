
<div class="modal fade" id="createFacultyModal" tabindex="-1" aria-labelledby="createFacultyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createFacultyModalLabel">Create Faculty</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form for creating a new faculty -->
                <form method="POST" action="{{ route('faculty.store') }}">
                    @csrf
                    <!-- Faculty name field -->
                    @include('content.faculty.from')
                    <div class="d-flex gap-1 justify-content-end">                       
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-warning">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
