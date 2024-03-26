<?php
    $viewsPath = config('paths.views');
    include($viewsPath . 'HeaderView.blade.php');
    include($viewsPath . 'NavBarView.blade.php');
?>
<div class="container d-flex flex-column">
    <div>
        <h1 class="mt-2">Dashboard</h1>
    </div>
    <div class="row">
        <div class="col-md-4 mt-5">
            <a href="/student">
                <div class="card">
                    <div class="card-body d-flex align-item-center justify-content-start" style="gap: 10px;">
                        <img src="{{ asset('student-icon.png') }}" alt="" style="width: 75px; height-75px">
                        <h4 class="mt-4">1500 Students</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mt-5">
            <a href="#">
                <div class="card">
                    <div class="card-body d-flex align-item-center justify-content-start" style="gap: 10px;">
                        <img src="{{ asset('teacher-icon.jpg') }}" alt="" style="width: 75px; height: 75px;">
                        <h4 class="mt-4">50 Teachers</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mt-5">
            <a href="#">
                <div class="card">
                    <div class="card-body d-flex align-item-center justify-content-start" style="gap: 10px;">
                        <img src="{{ asset('subject-icon.png') }}" alt="" style="width: 75px; height: 75px;">
                        <h4 class="mt-4">Subjects</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mt-5">
            <a href="#">
                <div class="card">
                    <div class="card-body d-flex align-item-center justify-content-start" style="gap: 10px;">
                        <img src="{{ asset('classroom-icon.png') }}" alt="" style="width: 75px; height: 75px;">
                        <h4 class="mt-4">20 Classrooms</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mt-5">
            <a href="#">
                <div class="card">
                    <div class="card-body d-flex align-item-center justify-content-start" style="gap: 10px;">
                        <img src="{{ asset('university-icon.png') }}" alt="" style="width: 75px; height: 75px;">
                        <h4 class="mt-4">6 University</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mt-5">
            <a href="#">
                <div class="card">
                    <div class="card-body d-flex align-item-center justify-content-start" style="gap: 10px;">
                        <img src="{{ asset('short-course-icon.png') }}" alt="" style="width: 75px; height: 75px">
                        <h4 class="mt-4">Short Courses</h4>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<style>
    body{
        margin-left: 200px;
    }
</style>
<?php 
    include($viewsPath . 'FooterView.blade.php');
?>