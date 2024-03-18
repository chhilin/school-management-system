<div class="modal fade" id="confirmView{{ $student->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmViewLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="confirmViewLabel">Detail Information Student</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 text-center px-1 border-end">
                        <h4 class="mt-4 text-wrap">{{ $student->Khmer_Name }} @if($student->Khmer_Name !== $student->English_Name) / {{ $student->English_Name }} @endif</h4>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6 text-wrap">
                                <strong>Student ID</strong><br>
                                {{ $student->ID }}
                            </div>
                            <div class="col-md-6 text-wrap">
                                <strong>Gender</strong><br>
                                {{ $student->Gender }}
                            </div>
                            <div class="col-md-6 text-wrap">
                                <strong>College</strong><br>
                                {{ $student->College }}
                            </div>
                            <div class="col-md-6 text-wrap">
                                <strong>Classroom</strong><br>
                                {{ $student->Classroom }}
                            </div>
                            <div class="col-md-6 text-wrap">
                                <strong>Short Course</strong><br>
                                {{ $student->Short_Course }}
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 text-wrap">
                                <strong>English Level</strong><br>
                                {{ $student->English_level }}
                            </div>
                            <div class="col-md-6 text-wrap">
                                <strong>IT Level</strong><br>
                                {{ $student->IT_level }}
                            </div>
                            <div class="col-md-6 text-wrap">
                                <strong>Working Team</strong><br>
                                {{ $student->Working_team }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
