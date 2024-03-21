<?php
    $viewsPath = config('paths.views');
    include($viewsPath . 'HeaderView.blade.php');
    include($viewsPath . 'NavBarView.blade.php');
    // include($viewsPath . 'SideBarView.blade.php');


?>
<div class="container container-stype">
    <div>
        <h1 class="mt-2">Dashboard</h1>
    </div>
    <div class="row">
        <div class="col-md-4 mt-5">
            <a href="/dashboard">
                <div class="card">
                    <div class="card-body d-flex align-item-center justify-content-start" style="gap: 10px;">
                        <img src="{{ asset('student-icon.png') }}" alt="" style="width: 100px; height-100px">
                        <h3 class="mt-4">1500 Students</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mt-5">
            <a href="#">
                <div class="card">
                    <div class="card-body d-flex align-item-center justify-content-start" style="gap: 10px;">
                        <img src="{{ asset('teacher-icon.jpg') }}" alt="" style="width: 100px; height: 100px;">
                        <h3 class="mt-4">50 Teachers</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mt-5">
            <a href="#">
                <div class="card">
                    <div class="card-body d-flex align-item-center justify-content-start" style="gap: 10px;">
                        <img src="{{ asset('subject-icon.png') }}" alt="" style="width: 100px; height: 100px;">
                        <h3 class="mt-4">Subjects</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mt-5">
            <a href="#">
                <div class="card">
                    <div class="card-body d-flex align-item-center justify-content-start" style="gap: 10px;">
                        <img src="{{ asset('classroom-icon.png') }}" alt="" style="width: 100px; height: 100px;">
                        <h3 class="mt-4">20 Classrooms</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mt-5">
            <a href="#">
                <div class="card">
                    <div class="card-body d-flex align-item-center justify-content-start" style="gap: 10px;">
                        <img src="{{ asset('university-icon.png') }}" alt="" style="width: 100px; height: 100px;">
                        <h3 class="mt-4">6 University</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mt-5">
            <a href="#">
                <div class="card">
                    <div class="card-body d-flex align-item-center justify-content-start" style="gap: 10px;">
                        <img src="{{ asset('short-course-icon.png') }}" alt="" style="width: 100px; high-100px">
                        <h3 class="mt-4">Short Courses</h3>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<?php 
    include($viewsPath . 'FooterView.blade.php');
?>