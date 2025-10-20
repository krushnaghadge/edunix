<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
      
    <!-- plugins:css -->
    <link rel="stylesheet" href="Dashboard/vendors/feather/feather.css">
    <link rel="stylesheet" href="Dashboard/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="Dashboard/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="Dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="Dashboard/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="Dashboard/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="Dashboard/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="Dashboard/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="{{ URL::to('/admin') }}"><img src="images/logo.svg"
                        class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="{{ URL::to('/admin') }}"><img src="images/logo-mini.svg"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <span class="input-group-text" id="search">
                                    <i class="icon-search"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
                                aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-toggle="dropdown">
                            <i class="icon-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="ti-settings mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Private message
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="ti-user mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="images/faces/face28.jpg" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>
                            <a class="dropdown-item">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-settings d-none d-lg-flex">
                        <a class="nav-link" href="#">
                            <i class="icon-ellipsis"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>

            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">

                    <!-- Dashboard -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/admin') }}">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <!-- Lead/Inquiry -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#lead-inquiry" aria-expanded="false"
                            aria-controls="lead-inquiry">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">Lead/Inquiry</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="lead-inquiry">
                            <ul class="nav flex-column sub-menu">
                             
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/add-leads') }}">Add
                                        Leads</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/leadAssign') }}">Lead
                                        Assign</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/leadSources') }}">Lead
                                        Sources</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/leadStatus') }}">Lead
                                        Status</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Student -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#student" aria-expanded="false"
                            aria-controls="student">
                            <i class="icon-graduation menu-icon"></i>
                            <span class="menu-title">Student</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="student">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/allStudents') }}">All
                                        Students</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/passedStudents') }}">Passed</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/droppedStudents') }}">Dropped</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/migrationStudents') }}">Migration</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Teacher -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#teacher" aria-expanded="false"
                            aria-controls="teacher">
                            <i class="icon-book-open menu-icon"></i>
                            <span class="menu-title">Teacher</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="teacher">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/allTeachers') }}">All
                                        Teachers</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Employees -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#employees" aria-expanded="false"
                            aria-controls="employees">
                            <i class="icon-briefcase menu-icon"></i>
                            <span class="menu-title">Employees</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="employees">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/employeeRoles') }}">Employee Roles</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/allEmployees') }}">All
                                        Employees</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/parent') }}">Parent</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Sibling -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#sibling" aria-expanded="false"
                            aria-controls="sibling">
                            <i class="icon-user menu-icon"></i>
                            <span class="menu-title">Sibling</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="sibling">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/allSiblings') }}">All
                                        Siblings</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Fees -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#fees" aria-expanded="false"
                            aria-controls="fees">
                            <i class="icon-wallet menu-icon"></i>
                            <span class="menu-title">Fees</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="fees">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/collectFees') }}">Collect/Demand Fees</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/feesDefaulters') }}">Fees Defaulters</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/collectFeesLags') }}">Collect Fees Lags</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/feesCollectionReport') }}">Fees Collection Report</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/feesStructureSetup') }}">Fees Structure Setup</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/feesStructureReport') }}">Fees Structure Report</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/feesCollectionMonthly') }}">Fees Collection (Monthly)</a>
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/onlineFeesStructure') }}">Online Fees Structure</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Mobile App Users -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#mobileAppUser" aria-expanded="false"
                            aria-controls="mobileAppUser">
                            <i class="icon-phone menu-icon"></i>
                            <span class="menu-title">Mobile App User</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="mobileAppUser">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/mobileAppUsers') }}">All
                                        Users</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Homework -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#homework" aria-expanded="false"
                            aria-controls="homework">
                            <i class="icon-book menu-icon"></i>
                            <span class="menu-title">Homework</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="homework">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/homework') }}">All
                                        Homework</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- House Block -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#houseBlock" aria-expanded="false"
                            aria-controls="houseBlock">
                            <i class="icon-home menu-icon"></i>
                            <span class="menu-title">House Block</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="houseBlock">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/houseBlocks') }}">All
                                        House Blocks</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Attendance -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#attendance" aria-expanded="false"
                            aria-controls="attendance">
                            <i class="icon-check menu-icon"></i>
                            <span class="menu-title">Attendance</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="attendance">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/studentAttendance') }}">Student Attendance</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/staffAttendance') }}">Staff Attendance</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/qrCodeLags') }}">QR Code
                                        Lags</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Leaves -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#leaves" aria-expanded="false"
                            aria-controls="leaves">
                            <i class="icon-logout menu-icon"></i>
                            <span class="menu-title">Leaves</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="leaves">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/leaveRequest') }}">Leave
                                        Request</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/myLeave') }}">My
                                        Leave</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/leaveType') }}">Leave
                                        Type</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/leaveSetting') }}">Leave
                                        Setting</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- User Management -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#userManagement" aria-expanded="false"
                            aria-controls="userManagement">
                            <i class="icon-user menu-icon"></i>
                            <span class="menu-title">User Management</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="userManagement">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/addUser') }}">Add
                                        User</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/viewUsers') }}">View
                                        Users</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/editUser') }}">Edit
                                        User</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/deleteUser') }}">Delete
                                        User</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- School Management -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#schoolManagement" aria-expanded="false"
                            aria-controls="schoolManagement">
                            <i class="icon-home menu-icon"></i>
                            <span class="menu-title">School Management</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="schoolManagement">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/addSchool') }}">Add
                                        School</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/viewSchools') }}">View
                                        Schools</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/editSchool') }}">Edit
                                        School</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/deleteSchool') }}">Delete School</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Examination / Online Exams -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#exams" aria-expanded="false"
                            aria-controls="exams">
                            <i class="icon-notebook menu-icon"></i>
                            <span class="menu-title">Online Exams</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="exams">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/createExam') }}">Create
                                        Exam</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/viewResults') }}">View
                                        Results</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/gradingSetup') }}">Grading Setup</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Transport Management -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#transport" aria-expanded="false"
                            aria-controls="transport">
                            <i class="icon-directions menu-icon"></i>
                            <span class="menu-title">Transport Management</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="transport">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/addVehicle') }}">Add
                                        Vehicle</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/routeManagement') }}">Route Management</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/driverDetails') }}">Driver Details</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Document Management / Cloud Storage -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#documents" aria-expanded="false"
                            aria-controls="documents">
                            <i class="icon-cloud menu-icon"></i>
                            <span class="menu-title">Document Management</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="documents">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/uploadDocuments') }}">Upload Documents</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/viewFiles') }}">View
                                        Files</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/assignClasses') }}">Assign to Classes</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Curriculum / Subject and Exam Management -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#curriculum" aria-expanded="false"
                            aria-controls="curriculum">
                            <i class="icon-book menu-icon"></i>
                            <span class="menu-title">Curriculum</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="curriculum">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/subjectList') }}">Subject List</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/addExamCurriculum') }}">Add Exam</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/viewExamResults') }}">View Exam Results</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Help Desk / Support Center -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#helpdesk" aria-expanded="false"
                            aria-controls="helpdesk">
                            <i class="icon-support menu-icon"></i>
                            <span class="menu-title">Support Center</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="helpdesk">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/raiseTicket') }}">Raise
                                        Ticket</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/viewOpenTickets') }}">View Open Tickets</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/ticketHistory') }}">Ticket History</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Events / School Calendar -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#events" aria-expanded="false"
                            aria-controls="events">
                            <i class="icon-calendar menu-icon"></i>
                            <span class="menu-title">School Calendar</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="events">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/addEvent') }}">Add
                                        Event</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/viewCalendar') }}">View
                                        Calendar</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Academic Setup / Grade and House Management -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#academicSetup" aria-expanded="false"
                            aria-controls="academicSetup">
                            <i class="icon-layers menu-icon"></i>
                            <span class="menu-title">Academic Setup</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="academicSetup">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/defineGrades') }}">Define Grades</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/houseListings') }}">House Listings</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Media / Gallery -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#gallery" aria-expanded="false"
                            aria-controls="gallery">
                            <i class="icon-picture menu-icon"></i>
                            <span class="menu-title">Gallery</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="gallery">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/uploadImages') }}">Upload Images</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/eventPhotos') }}">Event
                                        Photos</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- Reports / Reports and Analytics -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#reports" aria-expanded="false"
                            aria-controls="reports">
                            <i class="icon-graph menu-icon"></i>
                            <span class="menu-title">Reports</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="reports">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/studentPerformance') }}">Student Performance</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/financialReports') }}">Financial Reports</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/attendanceSummary') }}">Attendance Summary</a></li>
                            </ul>
                        </div>
                    </li>


                    <!-- User Profile -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false"
                            aria-controls="auth">
                            <i class="icon-head menu-icon"></i>
                            <span class="menu-title">User Profile</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="auth">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="{{ URL::to('/logout') }}">Logout</a>
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ URL::to('/adminProfile') }}">Profile</a></li>
                            </ul>
                        </div>
                    </li>



                </ul>
            </nav>



            <div class="main-panel">
                <div class="content-wrapper">
