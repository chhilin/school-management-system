@include('partials.HeaderView')
@include('partials.NavBarView')
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center" style="height: 80vh; width:100%;">
            <div class="col-xl-6">
                <div class="card">
                    <div class="container mt-2 card-body">
                        <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
                            @csrf
                            @include('content.user.form') 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
