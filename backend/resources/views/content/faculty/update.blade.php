<div class="modal fade" id="updateFacultyModal{{ $faculty->id ?? 0 }}" tabindex="-1" aria-labelledby="updateFacultyModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateFacultyModalLabel">Update Faculty</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form for updating a faculty -->
                <form method="PUT" action="{{ route('faculty.update', ['id' => $faculty->id]) }}">
                    @csrf
                    <!-- Faculty name field -->
                    @include('content.faculty.from')
                    
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>