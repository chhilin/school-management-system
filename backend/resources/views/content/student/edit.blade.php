@include('partials.HeaderView')
@include('partials.NavBarView')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center" style="height: 80vh; width:100%;">
            <div class="col-xl-6">
                <div class="card">
                    <div class="container mt-2 card-body">
                    <form method="POST" action="{{ url('/student/edit',$student->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        @include('content.student.form', ['student' => $student])
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
