@extends('layouts/contentNavbarLayout')

@section('title', 'Cards basic - UI elements')

@section('vendor-script')
<script src="{{ asset('assets/vendor/libs/masonry/masonry.js') }}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="fw-bold">Student Update</h5>
</div>
<div class="row">
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST" action="{{ url('/students/edit', $student->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('content.student.form', ['students' => $students])
                    <a href="{{ url('students') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('vendor-script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
