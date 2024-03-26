@include('partials.HeaderView')
@include('partials.NavBarView')
@include('partials.SideBarView')
@section('title', 'Course List - UI elements')
@section('vendor-script')
<script src="{{ asset('assets/vendor/libs/masonry/masonry.js') }}"></script>
@endsection
<div class="container-style mt-5">
    <div class="card mb-4">
        <div class="card-header">
            <h5 class="fw-bold mb-0">Unversity List</h5>
        </div>
        <div class="card-body">
            <form class="mb-3" >
                <div class="row">
                    <div class="col-md-6 text-md-end mt-3 mt-md-0">
                        <a href="{{ url('/') }}" class="btn btn-outline-secondary">
                            <i class="bx bx-refresh"></i> Clear
                        </a>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createFacultyModal">
                            Add
                        </button>
                    </div>
                </div>
            </form>
            <div class="table-responsive text-nowrap" id="containfaculty" style="width: 100%;">
                @include('content.faculty.table')
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
            </div>
        </div>
    </div>
    @include('content.faculty.create')
    @include('partials.FooterView')
    <style>
        .container-style {
            margin-left: 260px;
            width: 80%;

        }
    </style>