@extends('layouts/contentNavbarLayout')

@section('title', 'Course List - UI elements')

@section('vendor-script')
<script src="{{ asset('assets/vendor/libs/masonry/masonry.js') }}"></script>
@endsection
<div class="card mb-4">
    <div class="card-header">
        <h5 class="fw-bold mb-0">Student List</h5>
    </div>
    <div class="card-body">
        <form class="mb-3">
            <div class="row">
                <div class="col-md-6 text-md-end mt-3 mt-md-0">
                    <a href="{{ url('/') }}" class="btn btn-outline-secondary">
                        <i class="bx bx-refresh"></i> Clear
                    </a>
                    <a href="student/create" class="btn btn-primary">
                        <i class="bx bx-plus"></i> Add
                    </a>
                </div>
            </div>
        </form>
        <div class="table-responsive text-nowrap" id="containstudent">
            @include('content.student.table')
        </div>
        <div class="d-flex justify-content-between align-items-center mt-3">
        </div>
    </div>
</div>