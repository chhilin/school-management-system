@include('partials.HeaderView')
@include('partials.NavBarView')
@include('partials.SideBarView')

<div class="container" style="max-width: 100%;">
    <div class="card d-flex justify-content-end">
        <div class="card-header">
            <h5 class="fw-bold mb-0 d-flex justify-content-center align-items-center">Students List</h5>
        </div>
        <form class="card-body mb-3 d-flex justify-content-end">
            <div class="col-md-2">
                <div class="col text-end mt-3 mt-md-0">
                    <a href="{{ url('student') }}" class="btn btn-outline-secondary">
                        <i class="bx bx-refresh"></i> Clear
                    </a>
                    <a href="{{ url('student/create') }}" class="btn btn-primary">
                        <i class="bx bx-plus"></i> New
                    </a>
                </div>
            </div>
        </form>
        <div class="card-body">
            <div class="d-flex justify-content-end" id="containstudent" style="max-width: 100%;">
                @include('content.student.table')
            </div>
        </div>
    </div>
</div>
