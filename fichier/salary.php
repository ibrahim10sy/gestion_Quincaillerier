﻿<!DOCTYPE php>
<php lang="en">
<head>
<meta charset="utf-8">
<title>G-QUINCAILLERIE </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link href="../../../../css?family=Roboto:300,400,500,700,900" rel="stylesheet">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">

<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="assets/plugins/datetimepicker/css/tempusdominus-bootstrap-4.min.css">

<link rel="stylesheet" href="assets/css/select2.min.css">

<link rel="stylesheet" href="assets/plugins/datetimepicker/css/tempusdominus-bootstrap-4.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<!--[if lt IE 9]>
		<script src="assets/js/php5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<div class="main-wrapper">

<div class="header-outer">
<div class="header">
<a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fas fa-bars" aria-hidden="true"></i></a>
<a id="toggle_btn" class="float-left" href="javascript:void(0);">
<img src="assets/img/sidebar/icon-21.png" alt="">
</a>

<ul class="nav float-left">
<li>
<div class="top-nav-search">
<a href="javascript:void(0);" class="responsive-search">
<i class="fa fa-search"></i>
</a>
<form action="search.php">
<input class="form-control" type="text" placeholder="Search here">
<button class="btn" type="submit"><i class="fa fa-search"></i></button>
</form>
</div>
</li>
<li>
<a href="accueil.php" class="mobile-logo d-md-block d-lg-none d-block"><img src="assets/img/logo1.png" alt="" width="30" height="30"></a>
</li>
</ul>

<ul class="nav user-menu float-right">
<li class="nav-item dropdown d-none d-sm-block">
<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
<img src="assets/img/sidebar/icon-22.png" alt="">
</a>
<div class="dropdown-menu notifications">
<div class="topnav-dropdown-header">
<span>Notifications</span>
</div>
<div class="drop-scroll">
<ul class="notification-list">
<li class="notification-message">
<a href="activities.php">
<div class="media">
<span class="avatar">
<img alt="John Doe" src="assets/img/user-06.jpg" class="img-fluid rounded-circle">
</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">John Doe</span> is now following you </p>
<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.php">
<div class="media">
<span class="avatar">T</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> sent you a message.</p>
<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.php">
<div class="media">
<span class="avatar">L</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Misty Tison</span> like your photo.</p>
<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.php">
<div class="media">
<span class="avatar">G</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Rolland Webber</span> booking appoinment for meeting.</p>
<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
</div>
</div>
</a>
</li>
<li class="notification-message">
<a href="activities.php">
<div class="media">
<span class="avatar">T</span>
<div class="media-body">
<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> like your photo.</p>
<p class="noti-time"><span class="notification-time">2 days ago</span></p>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="activities.php">View all Notifications</a>
</div>
</div>
</li>
<li class="nav-item dropdown d-none d-sm-block">
<a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><img src="assets/img/sidebar/icon-23.png" alt=""> </a>
</li>
<li class="nav-item dropdown has-arrow">
<a href="#" class=" nav-link user-link" data-toggle="dropdown">
<span class="user-img"><img class="rounded-circle" src="assets/img/user-06.jpg" width="30" alt="Admin">
<span class="status online"></span></span>
<span>Admin</span>
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="profile.php">My Profile</a>
<a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
<a class="dropdown-item" href="settings.php">Settings</a>
<a class="dropdown-item" href="login.php">Logout</a>
</div>
</li>
</ul>
<div class="dropdown mobile-user-menu float-right"> 
<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="profile.php">My Profile</a>
<a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
<a class="dropdown-item" href="settings.php">Settings</a>
<a class="dropdown-item" href="login.php">Logout</a>
</div>
</div>
</div>
</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<div class="header-left">
<a href="accueil.php" class="logo">
<img src="assets/img/logo1.png" width="40" height="40" alt="">
<span class="text-uppercase">G-QUINCAILLERIE</span>
</a>
</div>
<ul class="sidebar-ul">
<li class="menu-title">Menu</li>
<li>
<a href="accueil.php"><img src="assets/img/sidebar/icon-1.png" alt="icon"><span>Dashboard</span></a>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-2.png" alt="icon"> <span> Teachers</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="all-teachers.php"><span>All Teachers</span></a></li>
<li><a href="ajouter-client.php"><span>Add Teacher</span></a></li>
<li><a href="edit-teacher.php"><span>Edit Teacher</span></a></li>
<li><a href="about-teacher.php"><span>About Teacher</span></a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-3.png" alt="icon"> <span> Students</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="all-students.php"><span>All Students</span></a></li>
<li><a href="add-student.php"><span>Add Student</span></a></li>
<li><a href="edit-student.php"><span>Edit Student</span></a></li>
<li><a href="about-student.php"><span>ABout student</span></a></li>
</ul>
</li>
 <li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-4.png" alt="icon"> <span> Parents</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="all-parents.php"><span>All Parents</span></a></li>
<li><a href="add-parent.php"><span>Add Parent</span></a></li>
<li><a href="edit-parent.php"><span>Edit Parent</span></a></li>
<li><a href="about-parent.php"><span>About Parent</span></a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/sidebar/icon-5.png" alt="icon"> <span>Apps</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li class="submenu">
<a href="javascript:void(0);"><span>Email</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="compose.php"><span>Compose Mail</span></a></li>
<li>
<a href="inbox.php"> <span> Inbox</span> </a>
</li>
<li><a href="mail-view.php"><span>Mailview</span></a></li>
</ul>
</li>
<li>
<a href="chat.php"> Chat <span class="badge badge-pill bg-primary float-right">5</span></a>
</li>
<li class="submenu">
<a href="#"><span> Calls</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="voice-call.php"><span>Voice Call</span></a></li>
<li><a href="video-call.php"><span>Video Call</span></a></li>
<li><a href="incoming-call.php"><span>Incoming Call</span></a></li>
</ul>
</li>
<li>
<a href="contacts.php"><span> Contacts</span></a>
</li>
</ul>
</li>
<li>
<a href="calendar.php"><img src="assets/img/sidebar/icon-6.png" alt="icon"> <span>Calendar</span></a>
</li>
<li>
<a href="exam-list.php"><img src="assets/img/sidebar/icon-7.png" alt="icon"> <span>Exam list</span></a>
</li>
<li>
<a href="holidays.php"><img src="assets/img/sidebar/icon-8.png" alt="icon"> <span>Holidays</span></a>
</li>
<li>
<a href="calendar.php"><img src="assets/img/sidebar/icon-9.png" alt="icon"><span> Events</span></a>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-10.png" alt="icon"><span> Accounts </span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="invoices.php"><span>Invoices</span></a></li>
<li><a href="payments.php"><span>Payments</span></a></li>
<li><a href="expenses.php"><span>Expenses</span></a></li>
<li><a href="provident-fund.php"><span>Provident Fund</span></a></li>
<li><a href="taxes.php"><span>Taxes</span></a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-11.png" alt="icon"><span> Payroll </span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a class="active" href="salary.php"><span> Employee Salary </span></a></li>
<li><a href="salary-view.php"><span> Payslip </span></a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-12.png" alt="icon"> <span> Blog</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="blog.php"><span>Blog</span></a></li>
<li><a href="blog-details.php"><span>Blog View</span></a></li>
<li><a href="add-blog.php"><span>Add Blog</span></a></li>
<li><a href="edit-blog.php"><span>Edit Blog</span></a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);" class="noti-dot"><img src="assets/img/sidebar/icon-13.png" alt="icon"> <span>Management </span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li class="submenu">
<a href="#"><span> Employees</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="all-employees.php"><span>All Employees</span></a></li>
<li><a href="holidays.php"><span>Holidays</span></a></li>
<li><a href="leaves.php"><span>Leave Requests</span> <span class="badge badge-pill bg-primary float-right">1</span></a></li>
<li><a href="attendance.php"><span>Attendance</span></a></li>
<li><a href="departments.php"><span>Departments</span></a></li>
<li><a href="designations.php"><span>Designations</span></a></li>
</ul>
</li>
<li>
<a href="activities.php"><span>Activities</span></a>
</li>
<li>
<a href="users.php"><span>Users</span></a>
</li>
<li class="submenu">
<a href="#"><span> Reports </span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="expense-reports.php"> <span>Expense Report </span></a></li>
<li><a href="invoice-reports.php"> <span>Invoice Report</span> </a></li>
</ul>
</li>
</ul>
</li>
<li>
<a href="settings.php"><img src="assets/img/sidebar/icon-14.png" alt="icon"> <span>Settings</span></a>
</li>
<li class="menu-title">UI Elements</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-15.png" alt="icon"> <span> Components</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="uikit.php"><span>UI Kit</span></a></li>
<li><a href="typography.php"><span>Typography</span></a></li>
<li><a href="tabs.php"><span>Tabs</span></a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-26.png" alt="icon"> <span> Elements</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="sweetalerts.php">Sweet Alerts</a></li>
<li><a href="tooltip.php">Tooltip</a></li>
<li><a href="popover.php">Popover</a></li>
<li><a href="ribbon.php">Ribbon</a></li>
<li><a href="clipboard.php">Clipboard</a></li>
<li><a href="drag-drop.php">Drag & Drop</a></li>
<li><a href="rangeslider.php">Range Slider</a></li>
<li><a href="rating.php">Rating</a></li>
<li><a href="toastr.php">Toastr</a></li>
<li><a href="text-editor.php">Text Editor</a></li>
<li><a href="counter.php">Counter</a></li>
<li><a href="scrollbar.php">Scrollbar</a></li>
<li><a href="spinner.php">Spinner</a></li>
<li><a href="notification.php">Notification</a></li>
<li><a href="lightbox.php">Lightbox</a></li>
<li><a href="stickynote.php">Sticky Note</a></li>
<li><a href="timeline.php">Timeline</a></li>
<li><a href="horizontal-timeline.php">Horizontal Timeline</a></li>
<li><a href="form-wizard.php">Form Wizard</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-27.png" alt="icon"> <span> Chart</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="chart-apex.php">Apex Charts</a></li>
<li><a href="chart-js.php">Chart Js</a></li>
<li><a href="chart-morris.php">Morris Charts</a></li>
<li><a href="chart-flot.php">Flot Charts</a></li>
<li><a href="chart-peity.php">Peity Charts</a></li>
<li><a href="chart-c3.php">C3 Charts</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-28.png" alt="icon"> <span>Icons</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="icon-fontawesome.php">Fontawesome Icons</a></li>
<li><a href="icon-feather.php">Feather Icons</a></li>
<li><a href="icon-ionic.php">Ionic Icons</a></li>
<li><a href="icon-material.php">Material Icons</a></li>
<li><a href="icon-pe7.php">Pe7 Icons</a></li>
<li><a href="icon-simpleline.php">Simpleline Icons</a></li>
<li><a href="icon-themify.php">Themify Icons</a></li>
<li><a href="icon-weather.php">Weather Icons</a></li>
<li><a href="icon-typicon.php">Typicon Icons</a></li>
<li><a href="icon-flag.php">Flag Icons</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-17.png" alt="icon"> <span> Forms</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
 <li><a href="basic-inputs.php"><span>Basic Input</span></a></li>
<li><a href="form-basic-inputs.php"><span>Basic Inputs</span></a></li>
<li><a href="form-input-groups.php"><span>Input Groups</span></a></li>
<li><a href="form-horizontal.php"><span>Horizontal Form</span></a></li>
<li><a href="form-vertical.php"><span>Vertical Form</span></a></li>
<li><a href="form-validation.php"> Form Validation </a></li>
<li><a href="form-select2.php">Form Select2 </a></li>
<li><a href="form-fileupload.php">File Upload </a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-18.png" alt="icon"> <span> Tables</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="tables-basic.php"><span>Basic Tables</span></a></li>
<li><a href="tables-datatables.php"><span>Data Table</span></a></li>
</ul>
</li>
<li class="menu-title"><span>Extras</span></li>
<li class="submenu">
<a href="#"><img src="assets/img/sidebar/icon-19.png" alt="icon"> <span>Pages</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="login.php"> <span>Login </span></a></li>
<li><a href="register.php"><span> Register </span></a></li>
<li><a href="forgot-password.php"> <span>Forgot Password</span> </a></li>
<li><a href="change-password2.php"> <span>Change Password</span> </a></li>
<li><a href="lock-screen.php"> <span>Lock Screen </span></a></li>
<li><a href="profile.php"> <span>Profile</span> </a></li>
<li><a href="gallery.php"> <span>Gallery </span></a></li>
<li><a href="error-404.php"><span>404 Error </span></a></li>
<li><a href="error-500.php"><span>500 Error </span></a></li>
<li><a href="blank-page.php"><span> Blank Page</span> </a></li>
</ul>
</li>
<li class="submenu">
<a href="javascript:void(0);"><img src="assets/img/sidebar/icon-20.png" alt="icon"> <span>Multi Level</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li class="submenu">
<a href="javascript:void(0);"><span>Level 1</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
<li class="submenu">
<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="javascript:void(0);">Level 3</a></li>
<li><a href="javascript:void(0);">Level 3</a></li>
</ul>
</li>
<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
</ul>
 </li>
<li>
<a href="javascript:void(0);"><span>Level 1</span></a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>


<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<h5 class="text-uppercase mb-0 mt-0 page-title">Employee Salary</h5>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<ul class="breadcrumb float-right p-0 mb-0">
<li class="breadcrumb-item"><a href="accueil.php"><i class="fas fa-home"></i> Home</a></li>
<li class="breadcrumb-item"><a href="#">Payroll</a></li>
<li class="breadcrumb-item"><span> Employee Salary</span></li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-4 col-5">
</div>
<div class="col-sm-8 col-7 text-right add-btn-col">
<a href="#" class="btn btn-primary btn-rounded float-right" data-toggle="modal" data-target="#add_salary"><i class="fas fa-plus"></i> Add Salary</a>
</div>
</div>
<div class="content-page">
<div class="row filter-row">
<div class="col-sm-6 col-md-3 col-lg-3 col-xl-3 col-12">
<div class="form-group form-focus">
<input class="form-control" type="text">
<label class="focus-label">Employee Name</label>
</div>
</div>
<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
<div class="form-group form-focus select-focus">
<select class="select form-control">
<option> -- Select -- </option>
<option>Employee</option>
<option>H.O.D</option>
</select>
<label class="focus-label">Role</label>
</div>
</div>
<div class="col-sm-6 col-md-3 col-lg-3 col-xl-3 col-12">
<div class="form-group form-focus">
<input class="form-control datetimepicker-input datetimepicker floating" type="text" data-toggle="datetimepicker">
<label class="focus-label">From</label>
</div>
</div>
<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
<div class="form-group form-focus">
<input class="form-control datetimepicker-input datetimepicker floating" type="text" data-toggle="datetimepicker">
<label class="focus-label">To</label>
</div>
</div>
<div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12 ">
<a href="#" class="btn btn-search rounded btn-block mb-3"> search </a>
</div>
</div>
<div class="row">
<div class="col-md-12 mb-3">
<div class="table-responsive mt-2">
<table class="table custom-table datatable">
<thead class="thead-light">
<tr>
<th style="width:25%;">Employee</th>
<th>Employee ID</th>
<th>Email</th>
<th>Joining Date</th>
<th>Role</th>
<th>Salary</th>
<th>Payslip</th>
<th class="text-right">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>
 <h2><a href="profile.php" class="avatar text-white">J</a><a href="profile.php">John Doe <span> Maths Teacher</span></a></h2>
</td>
<td>EM-0001</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="69030601070d060c290c11080419050c470a0604">[email&#160;protected]</a></td>
<td>1 Jan 2013</td>
<td>
<div class="dropdown">
<a href="#" role="button" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Maths Teacher</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Science Teacher</a>
<a class="dropdown-item" href="#">English</a>
<a class="dropdown-item" href="#">Library</a>
<a class="dropdown-item" href="#">Sports</a>
</div>
</div>
</td>
<td>$59698</td>
<td><a class="btn btn-sm btn-primary" href="salary-view.php">Generate Slip</a></td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary" title="Edit"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary" title="Delete"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.php" class="avatar text-white">R</a><a href="profile.php">Richard Miles <span>Science Teacher</span></a></h2>
</td>
<td>EM-0002</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="34465d575c554650595d58514774514c55594458511a575b59">[email&#160;protected]</a></td>
<td>1 Jan 2013</td>
<td>
<div class="dropdown">
<a href="#" role="button" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Science Teacher</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Science Teacher</a>
<a class="dropdown-item" href="#">English</a>
<a class="dropdown-item" href="#">Library</a>
<a class="dropdown-item" href="#">Sports</a>
</div>
</div>
</td>
<td>$72000</td>
<td><a class="btn btn-sm btn-primary" href="salary-view.php">Generate Slip</a></td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary" title="Edit"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary" title="Delete"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.php" class="avatar text-white">J</a><a href="profile.php">John Smith <span>Sports</span></a></h2>
</td>
<td>EM-0003</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3d575255534e505449557d58455c504d5158135e5250">[email&#160;protected]</a></td>
<td>1 Jan 2013</td>
<td>
<div class="dropdown">
<a href="#" role="button" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Sports</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Science Teacher</a>
<a class="dropdown-item" href="#">English</a>
<a class="dropdown-item" href="#">Library</a>
<a class="dropdown-item" href="#">Sports</a>
</div>
</div>
</td>
<td>$48200</td>
<td><a class="btn btn-sm btn-primary" href="salary-view.php">Generate Slip</a></td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary" title="Edit"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary" title="Delete"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>
<a href="profile.php" class="avatar">M</a>
<h2><a href="profile.php">Mike Litorus <span>English</span></a></h2>
</td>
<td>EM-0004</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e88581838d84819c879a9d9ba88d90898598848dc68b8785">[email&#160;protected]</a></td>
<td>1 Jan 2013</td>
<td>
<div class="dropdown">
<a href="#" role="button" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">English</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Science Teacher</a>
<a class="dropdown-item" href="#">English</a>
<a class="dropdown-item" href="#">Library</a>
<a class="dropdown-item" href="#">Sports</a>
</div>
</div>
</td>
<td>$59698</td>
<td><a class="btn btn-sm btn-primary" href="salary-view.php">Generate Slip</a></td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary" title="Edit"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary" title="Delete"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>
<a href="profile.php" class="avatar text-white">W</a>
<h2><a href="profile.php">Wilmer Deluna <span>H.O.D</span></a></h2>
</td>
<td>EM-0005</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c3b4aaafaea6b1a7a6afb6ada283a6bba2aeb3afa6eda0acae">[email&#160;protected]</a></td>
<td>1 Jan 2013</td>
<td>
<div class="dropdown">
<a href="#" role="button" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">H.O.D</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Science Teacher</a>
<a class="dropdown-item" href="#">English</a>
<a class="dropdown-item" href="#">Library</a>
<a class="dropdown-item" href="#">Sports</a>
</div>
</div>
</td>
<td>$43000</td>
<td><a class="btn btn-sm btn-primary" href="salary-view.php">Generate Slip</a></td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary" title="Edit"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary" title="Delete"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>
<a href="profile.php" class="avatar text-white">J</a>
<h2><a href="profile.php">Jeffrey Warden <span>Science Teacher</span></a></h2>
</td>
<td>EM-0006</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9ef4fbf8f8ecfbe7e9ffecfafbf0defbe6fff3eef2fbb0fdf1f3">[email&#160;protected]</a></td>
<td>1 Jan 2013</td>
<td>
<div class="dropdown">
<a href="#" role="button" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Science Teacher</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Science Teacher</a>
<a class="dropdown-item" href="#">English</a>
<a class="dropdown-item" href="#">Library</a>
<a class="dropdown-item" href="#">Sports</a>
</div>
</div>
</td>
<td>$45000</td>
<td><a class="btn btn-sm btn-primary" href="salary-view.php">Generate Slip</a></td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary" title="Edit"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary" title="Delete"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>
<a href="profile.php" class="avatar">B</a>
<h2><a href="profile.php">Bernardo Galaviz <span>Science Teacher</span></a></h2>
</td>
<td>EM-0007</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="85e7e0f7ebe4f7e1eae2e4e9e4f3ecffc5e0fde4e8f5e9e0abe6eae8">[email&#160;protected]</a></td>
<td>1 Jan 2014</td>
<td>
<div class="dropdown">
 <a href="#" role="button" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Science Teacher</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Science Teacher</a>
<a class="dropdown-item" href="#">English</a>
<a class="dropdown-item" href="#">Library</a>
<a class="dropdown-item" href="#">Sports</a>
</div>
</div>
</td>
<td>$38400</td>
<td><a class="btn btn-sm btn-primary" href="salary-view.php">Generate Slip</a></td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary" title="Edit"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary" title="Delete"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>
<a href="profile.php" class="avatar">L</a>
<h2><a href="profile.php">Lesley Grauer <span>H.O.D</span></a></h2>
</td>
<td>EM-0008</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4e222b3d222b37293c2f3b2b3c0e2b362f233e222b602d2123">[email&#160;protected]</a></td>
<td>1 Jun 2015</td>
<td>
<div class="dropdown">
<a href="#" role="button" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">H.O.D</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Science Teacher</a>
<a class="dropdown-item" href="#">English</a>
<a class="dropdown-item" href="#">Library</a>
<a class="dropdown-item" href="#">Sports</a>
</div>
</div>
</td>
<td>$75500</td>
<td><a class="btn btn-sm btn-primary" href="salary-view.php">Generate Slip</a></td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary" title="Edit"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary" title="Delete"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>
<a href="profile.php" class="avatar">J</a>
<h2><a href="profile.php">Jeffery Lalor <span>H.O.D</span></a></h2>
</td>
<td>EM-0009</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d0bab5b6b6b5a2a9bcb1bcbfa290b5a8b1bda0bcb5feb3bfbd">[email&#160;protected]</a></td>
<td>1 Jan 2013</td>
<td>
<div class="dropdown">
<a href="#" role="button" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">H.O.D</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Science Teacher</a>
<a class="dropdown-item" href="#">English</a>
<a class="dropdown-item" href="#">Library</a>
<a class="dropdown-item" href="#">Sports</a>
</div>
</div>
</td>
<td>$73550</td>
<td><a class="btn btn-sm btn-primary" href="salary-view.php">Generate Slip</a></td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary" title="Edit"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary" title="Delete"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>
<a href="profile.php" class="avatar">L</a>
<h2><a href="profile.php">Loren Gatlin <span>Sports</span></a></h2>
</td>
<td>EM-0010</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c5a9aab7a0aba2a4b1a9acab85a0bda4a8b5a9a0eba6aaa8">[email&#160;protected]</a></td>
<td>1 Jan 2013</td>
<td>
<div class="dropdown">
<a href="#" role="button" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Sports</a>
<div class="dropdown-menu">
 <a class="dropdown-item" href="#">Science Teacher</a>
<a class="dropdown-item" href="#">English</a>
<a class="dropdown-item" href="#">Library</a>
<a class="dropdown-item" href="#">Sports</a>
</div>
</div>
</td>
<td>$55000</td>
<td><a class="btn btn-sm btn-primary" href="salary-view.php">Generate Slip</a></td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary" title="Edit"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary" title="Delete"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
<tr>
<td>
<a href="profile.php" class="avatar">T</a>
<h2><a href="profile.php">Tarah Shropshire <span>Sports</span></a></h2>
</td>
<td>EM-0011</td>
<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="88fce9fae9e0fbe0fae7f8fbe0e1faedc8edf0e9e5f8e4eda6ebe7e5">[email&#160;protected]</a></td>
<td>1 Jan 2013</td>
<td>
<div class="dropdown">
<a href="#" role="button" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Sports</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Science Teacher</a>
<a class="dropdown-item" href="#">English</a>
<a class="dropdown-item" href="#">Library</a>
<a class="dropdown-item" href="#">Sports</a>
</div>
</div>
</td>
<td>$92400</td>
<td><a class="btn btn-sm btn-primary" href="salary-view.php">Generate Slip</a></td>
<td class="text-right">
<div class="dropdown dropdown-action">
<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_salary" title="Edit"><i class="fas fa-pencil-alt m-r-5"></i> Edit</a>
<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_salary" title="Delete"><i class="fas fa-trash-alt m-r-5"></i> Delete</a>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<div class="notification-box">
<div class="msg-sidebar notifications msg-noti">
<div class="topnav-dropdown-header">
<span>Messages</span>
</div>
<div class="drop-scroll msg-list-scroll">
<ul class="list-box">
<li>
<a href="chat.php">
<div class="list-item">
<div class="list-left">
<span class="avatar">R</span>
</div>
<div class="list-body">
<span class="message-author">Richard Miles </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.php">
<div class="list-item new-message">
<div class="list-left">
<span class="avatar">J</span>
</div>
<div class="list-body">
<span class="message-author">Ruth C. Gault</span>
<span class="message-time">1 Aug</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.php">
<div class="list-item">
<div class="list-left">
<span class="avatar">T</span>
</div>
<div class="list-body">
<span class="message-author"> Tarah Shropshire </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.php">
<div class="list-item">
<div class="list-left">
<span class="avatar">M</span>
</div>
<div class="list-body">
<span class="message-author">Mike Litorus</span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.php">
<div class="list-item">
<div class="list-left">
<span class="avatar">C</span>
</div>
<div class="list-body">
<span class="message-author"> Catherine Manseau </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.php">
<div class="list-item">
<div class="list-left">
<span class="avatar">D</span>
</div>
<div class="list-body">
<span class="message-author"> Domenic Houston </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.php">
<div class="list-item">
<div class="list-left">
<span class="avatar">B</span>
</div>
<div class="list-body">
<span class="message-author"> Buster Wigton </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.php">
<div class="list-item">
<div class="list-left">
<span class="avatar">R</span>
</div>
<div class="list-body">
<span class="message-author"> Rolland Webber </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.php">
<div class="list-item">
<div class="list-left">
<span class="avatar">C</span>
</div>
<div class="list-body">
<span class="message-author"> Claire Mapes </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.php">
<div class="list-item">
<div class="list-left">
<span class="avatar">M</span>
</div>
<div class="list-body">
<span class="message-author">Melita Faucher</span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.php">
<div class="list-item">
<div class="list-left">
<span class="avatar">J</span>
</div>
<div class="list-body">
<span class="message-author">Jeffery Lalor</span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.php">
<div class="list-item">
<div class="list-left">
<span class="avatar">L</span>
</div>
<div class="list-body">
<span class="message-author">Loren Gatlin</span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
<li>
<a href="chat.php">
<div class="list-item">
 <div class="list-left">
<span class="avatar">T</span>
</div>
<div class="list-body">
<span class="message-author">Tarah Shropshire</span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="chat.php">See all messages</a>
</div>
</div>
</div>
</div>

<div id="add_salary" class="modal" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content modal-lg">
<div class="modal-header">
<h4 class="modal-title">Add staff Salary</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<form>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Select staff</label>
<select class="select">
<option>John Doe</option>
<option>Richard Miles</option>
</select>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Net Salary</label>
<input class="form-control" type="text">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<h4 class="">Earnings</h4>
<div class="form-group">
<label>Basic</label>
<input class="form-control" type="text">
</div>
<div class="form-group">
<label>DA(40%)</label>
<input class="form-control" type="text">
</div>
<div class="form-group">
<label>HRA(15%)</label>
<input class="form-control" type="text">
</div>
<div class="form-group">
<label>Conveyance</label>
<input class="form-control" type="text">
</div>
<div class="form-group">
<label>Allowance</label>
<input class="form-control" type="text">
</div>
<div class="form-group">
<label>Medical Allowance</label>
<input class="form-control" type="text">
</div>
 <div class="form-group">
<label>Others</label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-sm-6">
<h4 class="">Deductions</h4>
<div class="form-group">
<label>TDS</label>
<input class="form-control" type="text">
</div>
<div class="form-group">
<label>ESI</label>
<input class="form-control" type="text">
</div>
<div class="form-group">
<label>PF</label>
<input class="form-control" type="text">
</div>
<div class="form-group">
<label>Leave</label>
<input class="form-control" type="text">
</div>
<div class="form-group">
<label>Prof. Tax</label>
<input class="form-control" type="text">
</div>
<div class="form-group">
<label>Labour Welfare</label>
<input class="form-control" type="text">
</div>
<div class="form-group">
<label>Fund</label>
<input class="form-control" type="text">
</div>
<div class="form-group">
<label>Others</label>
<input class="form-control" type="text">
</div>
</div>
</div>
<div class="m-t-20 text-center">
<button class="btn btn-primary btn-lg">Create Salary</button>
</div>
</form>
</div>
</div>
</div>
</div>
<div id="edit_salary" class="modal" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content modal-lg">
<div class="modal-header">
<h4 class="modal-title">Edit staff Salary</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<div class="modal-body">
<form>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label>Select staff</label>
<select class="select">
<option>John Doe</option>
<option>Richard Miles</option>
</select>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label>Net Salary</label>
<input class="form-control" type="text" value="$4000">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<h4 class="">Earnings</h4>
<div class="form-group">
<label>Basic</label>
<input class="form-control" type="text" value="$6500">
</div>
<div class="form-group">
<label>DA(40%)</label>
<input class="form-control" type="text" value="$2000">
</div>
<div class="form-group">
<label>HRA(15%)</label>
<input class="form-control" type="text" value="$700">
</div>
<div class="form-group">
<label>Conveyance</label>
<input class="form-control" type="text" value="$70">
</div>
<div class="form-group">
<label>Allowance</label>
<input class="form-control" type="text" value="$30">
</div>
<div class="form-group">
<label>Medical Allowance</label>
<input class="form-control" type="text" value="$20">
</div>
<div class="form-group">
<label>Others</label>
<input class="form-control" type="text">
</div>
</div>
<div class="col-sm-6">
<h4 class="">Deductions</h4>
<div class="form-group">
<label>TDS</label>
<input class="form-control" type="text" value="$300">
</div>
<div class="form-group">
<label>ESI</label>
<input class="form-control" type="text" value="$20">
</div>
<div class="form-group">
<label>PF</label>
<input class="form-control" type="text" value="$20">
</div>
<div class="form-group">
<label>Leave</label>
<input class="form-control" type="text" value="$250">
</div>
<div class="form-group">
<label>Prof. Tax</label>
<input class="form-control" type="text" value="$110">
</div>
<div class="form-group">
<label>Labour Welfare</label>
<input class="form-control" type="text" value="$10">
</div>
<div class="form-group">
<label>Fund</label>
<input class="form-control" type="text" value="$40">
</div>
<div class="form-group">
<label>Others</label>
 <input class="form-control" type="text" value="$15">
</div>
</div>
</div>
<div class="m-t-20 text-center">
<button class="btn btn-primary btn-lg mb-3">Save Changes</button>
</div>
</form>
</div>
</div>
</div>
</div>
<div id="delete_salary" class="modal" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content modal-md">
<div class="modal-header">
<h4 class="modal-title">Delete Salary</h4>
</div>
<form>
<div class="modal-body">
<p>Are you sure want to delete this?</p>
<div class="m-t-20 text-left">
<a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
<button type="submit" class="btn btn-danger">Delete</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>

<script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>

<script src="assets/js/select2.min.js"></script>
<script src="assets/js/moment.min.js"></script>

<script src="assets/plugins/datetimepicker/js/tempusdominus-bootstrap-4.min.js"></script>

<script src="assets/js/app.js"></script>
</body>
</php>