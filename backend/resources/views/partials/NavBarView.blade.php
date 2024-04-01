
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="container-fluid d-flex align-items-center bg-dark text-light w-100 py-2 fixed-top">
    <div class="nav-left mr-3">
        <img src="/DUC_profile.jpg" alt="Description of the image" style="width: 100px; height: 100px;">
    </div>
    <div class="nav-center justify-content-center align-items-center w-100" style="margin-left: 30px;">
        <h1>DUC Management System</h1>
    </div>
</div>
<style>
    body {
        padding-top: 115px;
        /* Adjusted based on the height of your fixed header */
    }
    
    .fixed-top {
        position: fixed;
        width: 100%;
        z-index: 1000;
        /* Ensure the header stays above other content */
        transition: top 0.3s;
        /* Smooth transition when scrolling */
    }
</style>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // JavaScript to handle scrolling and fixing the header
    $(window).scroll(function() {
        if ($(this).scrollTop() > 56) { // Adjusted based on the height of your fixed header
            $('.fixed-top').addClass('top-nav-collapse');
      } else {
        $('.fixed-top').removeClass('top-nav-collapse');
    }
    });
    </script>
    <?php
     $viewsPath = config('paths.views');
     include($viewsPath . 'SideBarView.blade.php');
    ?>