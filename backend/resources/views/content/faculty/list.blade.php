@include('partials.HeaderView')
@include('partials.NavBarView')
@include('partials.SideBarView')
@section('title', 'Course List - UI elements')
@section('vendor-script')
<script src="{{ asset('assets/vendor/libs/masonry/masonry.js') }}"></script>
@endsection
<div class="container-style mt-1">
        <div class="card-body">
            <div class=" flex-2 d-flex  flex-column p-4 shadow my-5  mb-4">
                <h1 class="fs-2">Faculty list</h1>

                <!-- ============= button research and add teacher============== -->
                <form method="get" action="{{ route('teachers.search')}}">
                    <div class="d-flex justify-content-between mt-4">
                        <div class="col-sm-5 d-flex flex-row">
                            <div class="input-group">
                                <input type="search" name="query" class="form-control" placeholder="Search">
                                <button class="btn btn-warning" type="submit">Search</button>
                            </div>
                        </div>
                </form>

                <!-- =============== button add new and clear ============== -->
                <div class="d-flex flex-row gap-2">
                    <!-- <button class="btn btn-light">Clear</button> -->
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                        data-bs-target="#createFacultyModal">Add New</a> </button>
                </div>
            </div>
            <div class="table-responsive text-nowrap mt-3" id="containfaculty" style="width: 100%;">
                @include('content.faculty.table')
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
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