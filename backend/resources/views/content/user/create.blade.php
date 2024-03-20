@extends('layouts/contentNavbarLayout')

@section('title', 'User Card - UI elements')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@section('vendor-script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"></script>
<script src="{{ asset('assets/vendor/libs/masonry/masonry.js') }}"></script>
@endsection

@section('page-script')
<script src="{{ asset('assets/js/pages-account-settings-account.js') }}"></script>
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="fw-bold">User Create </h5>
</div>
<div class="row">
    <div class="col-xl">
        <div class="card mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                    @csrf
                    @include('content.user.form')
                    <br>
                    <a href="{{ url('user') }}" class="btn btn-secondary me-1">Cancel</a>
                    <button type="submit" class="btn" style="background-color: #009DE1; color:white">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
</script>
