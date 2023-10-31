<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>LMS</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">

    <!-- Data Table CSS -->
    <link href="./plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.php">
                    <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="images/logo-text.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                <a href="javascript:void();" class="fw-bold mr-2"><i class="icon-user"></i> <span>Weblinxsolution</span></a>
                                <img src="images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>

                                        <li><a href="page-login.html"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a href="index.php" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-graduation menu-icon"></i> <span class="nav-text">Student Management</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="add-student.php">Add Student</a></li>
                            <li><a href="list-of-students.php">List of Students</a></li>
                            <!-- <li><a href="history-students.php">Student History</a></li> -->

                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-user menu-icon"></i> <span class="nav-text">Teacher Management</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="add-teacher.php">Add Teacher</a></li>
                            <li><a href="list-of-teachers.php">List of Teachers</a></li>
                            <li><a href="live-sessions.php">Live Sessions</a></li>
                            <li>
                                <a class="has-arrow" href="javascript:void()" aria-expanded="false">Payroll</a>
                                <ul aria-expanded="false">
                                    <li><a href="set-payroll.php">Set Payroll</a></li>
                                    <li><a href="list-of-payroll.php">List of Payrolls</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-star menu-icon"></i> <span class="nav-text">Review Management</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="list-of-teachers-reviews.php">List of Teachers Reviews</a></li>
                            <li><a href="list-of-students-reviews.php">List of Students Reviews</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-support menu-icon"></i> <span class="nav-text">Package Management</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="add-package.php">Add Package</a></li>
                            <li><a href="list-of-packages.php">List of Packages</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-book-open menu-icon"></i><span class="nav-text">Course Management</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Category</a>
                                <ul aria-expanded="false">
                                    <li><a href="add-category.php">Add Category</a></li>
                                    <li><a href="list-of-categories.php">List of Categories</a></li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Course</a>
                                <ul aria-expanded="false">
                                    <li><a href="add-course.php">Add Course</a></li>
                                    <li><a href="list-of-courses.php">List of Courses</a></li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Subject</a>
                                <ul aria-expanded="false">
                                    <li><a href="add-subject.php">Add Subject</a></li>
                                    <li><a href="list-of-subjects.php">List of Subjects</a></li>
                                </ul>
                            </li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Lesson</a>
                                <ul aria-expanded="false">
                                    <li><a href="add-lesson.php">Add Lesson</a></li>
                                    <li><a href="list-of-lessons.php">List of Lessons</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="list-of-finances.php" aria-expanded="false">
                            <i class="fa fa-dollar menu-icon"></i> <span class="nav-text">Student Reciepts</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-book-open menu-icon"></i> <span class="nav-text">Assign Courses</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="list-of-assigned-techers.php">Assign Course</a></li>
                            <li><a href="assign-subjects.php">List Assigned Courses</a></li>

                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-product-hunt menu-icon"></i> <span class="nav-text">E-commerce Management</span>
                        </a>
                        <ul aria-expanded="false">
                            <li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Category</a>
                                <ul aria-expanded="false">
                                    <li><a href="add-product-category.php">Add Category</a></li>
                                    <li><a href="list-of-product-categories.php">List of Category</a></li>
                                </ul>
                            </li>
                    </li>
                    <li><a href="add-product.php">Add Product</a></li>
                    <li><a href="list-of-products.php">List of Products</a></li>
                </ul>
                </li>
                <li>
                    <a href="reports-managements.php" aria-expanded="false">
                        <i class="icon-info menu-icon"></i> <span class="nav-text">Report Management</span>
                    </a>
                </li>
                </ul>
            </div>
        </div>

        <!--********************************** 
            Sidebar end
        ***********************************-->