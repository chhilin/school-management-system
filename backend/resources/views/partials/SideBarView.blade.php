<!-- Sidebar -->
<div id="wrapper" class="toggled">
    <div id="sidebar-wrapper" class=" d-flex bg-white shadow h-100">
        <!-- Sidebar Toggle Button -->
        <ul class="sidebar-nav">
            <li>
                <i class="material-icons">dashboard</i>
                <a href="/admin"></i>Dashboard</a>
            </li>
            <li>
                <i class="material-icons">record_voice_over</i>
                <a href="/teachers/list">Teachers</a>
            </li>
            <li>
                <i class="material-icons">supervisor_account</i>
                <a href="/student">Students</a>
            </li>
            <li>
                <i class="material-icons">local_library</i>
                <a href="/faculty">Faculty</a>
            </li>
            <li>
                <i class="material-icons">person</i>
                <a href="/user">Users</a>
            </li>
        </ul>
    </div>
</div>
<!-- /#wrapper -->

<!-- Bootstrap CSS CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<style>
    #wrapper {
        padding-left: 0;
        height: 100%;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    #wrapper.toggled {
        width: 200px;
    }

    #sidebar-wrapper {
        z-index: 1000;
        position: fixed;
        left: 0;
        width: 25%;
        height: 100%;
        overflow-y: auto;
        flex-direction: column;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    /* Sidebar Styles */

    .sidebar-nav {
        position: absolute;
        gap: 10px;
        width: 100%;
        margin: 0;
        margin-left: 20px;
        margin-top: 30px;
        padding: 0;
        list-style: none;
    }

    .sidebar-nav li {
        display: flex;
        align-items: center;
        text-indent: 10px;
        gap: 10px;
        line-height: 40px;
    }

    .sidebar-nav li a {
        display: block;
        text-decoration: none;
        color: #000000;
    }

    .sidebar-nav li:hover {
        text-decoration: none;
        color: #ffffff;
        background: #F4BC1C;
    }

    .sidebar-nav li a:active,
    .sidebar-nav li a:focus {
        text-decoration: none;
    }

    .sidebar-nav>.sidebar-brand {
        height: 65px;
        font-size: 18px;
        line-height: 60px;
    }

    .sidebar-nav>.sidebar-brand a {
        color: #000000;
    }

    .sidebar-nav>.sidebar-brand a:hover {
        color: #fff;
        background: none;
    }


    @media(max-width:768px) {
        #wrapper {
            padding-left: 0;

        }

        #sidebar-wrapper {
            width: 100%;
        }

        #wrapper.toggled #sidebar-wrapper {
            width: 150px;
        }

        #wrapper.toggled #page-content-wrapper {
            position: relative;
            margin-right: 0;
        }

        .sidebar-nav {}
    }

    /* For smaller screens */
    @media (min-width: 767px) {
        #wrapper.toggled #sidebar-wrapper {
            width: 100%;
        }

        #wrapper.toggled #sidebar-wrapper {
            width: 250px;
        }

        #wrapper.toggled #page-content-wrapper {
            position: relative;
            margin-right: 0;
        }
    }
</style>