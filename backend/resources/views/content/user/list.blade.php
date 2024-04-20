@include('partials.HeaderView')
@include('partials.NavBarView')
@include('partials.SideBarView')

<div class="container mr-5" style="max-width: 85%;">
    <div class="card mx-auto">
        <div class="flex-2 d-flex flex-column p-4 shadow my-5 mb-4">
            <h1 class="fs-2">បញ្ជីអ្នកប្រើប្រាស់</h1>
            <form method="get" action="{{ route('user.search') }}" class="mb-3">
                <div class="d-flex justify-content-between mt-4">
                    <div class="col-sm-5 d-flex flex-row">
                        <div class="input-group">
                            <input type="search" name="query" class="form-control" placeholder="Search">
                            <button class="btn btn-warning" type="submit">Search</button>
                        </div>
                    </div>
                    <div class="col text-end mt-3 mt-md-0">
                        <a href="{{ url('user') }}" class="btn btn-outline-secondary">
                            <i class="bx bx-refresh"></i> Clear
                        </a>
                        <a href="{{ url('user/create') }}" class="btn btn-warning">
                            <i class="bx bx-plus"></i> New
                        </a>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-end" id="containuser" style="max-width: 100%;">
                @include('content.user.table')
            </div>
        </div>
    </div>
</div>
