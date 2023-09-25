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

<link rel="stylesheet" href="assets/css/select2.min.css">

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
<li>
<a href="accueil.php" class="border-top-0"><i class="fas fa-home back-icon"></i> Back to Home</a>
</li>
<li class="menu-title"><a href="compose.php" class="rounded btn btn-primary btn-block mt-1">Compose</a></li>
<li class="active">
<a href="inbox.php">Inbox <span class="mail-count">(21)</span></a>
</li>
<li>
<a href="#">starred</a>
</li>
<li>
<a href="#">Sent Mail</a>
</li>
<li>
<a href="#">Trash</a>
</li>
<li>
<a href="#">Draft <span class="mail-count">(8)</span></a>
</li>
<li class="menu-title">Label <a href="#" class="add-user-icon"><i class="fas fa-plus"></i></a></li>
<li>
<a href="#"><i class="fas fa-circle text-success mail-label"></i> Work</a>
</li>
<li>
<a href="#"><i class="fas fa-circle text-danger mail-label"></i> school</a>
</li>
<li>
<a href="#"><i class="fas fa-circle text-warning mail-label"></i> Personal</a>
</li>
</ul>
</div>
</div>
</div>


<div class="page-wrapper">
<div class="content container-fluid">
<div class="card">
<div class="card-header">
<h4 class="page-title">Inbox</h4>
</div>
<div class="card-body">
<div class="email-header mb-3">
 <div class="row">
<div class="col-sm-9 col-md-8 col-8 top-action-left">
<div class="float-left">
<div class="btn-group dropdown-action">
<button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Select <i class="fas fa-angle-down "></i></button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">All</a>
<a class="dropdown-item" href="#">None</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Read</a>
<a class="dropdown-item" href="#">Unread</a>
</div>
</div>
<div class="btn-group dropdown-action">
<button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Actions <i class="fas fa-angle-down "></i></button>
<div class="dropdown-menu">
<a class="dropdown-item" href="#">Reply</a>
<a class="dropdown-item" href="#">Forward</a>
<a class="dropdown-item" href="#">Archive</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Mark As Read</a>
<a class="dropdown-item" href="#">Mark As Unread</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Delete</a>
</div>
</div>
<div class="btn-group dropdown-action">
<button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown"><i class="fas fa-folder"></i> <i class="fas fa-angle-down"></i></button>
<div role="menu" class="dropdown-menu">
<a class="dropdown-item" href="#">Social</a>
<a class="dropdown-item" href="#">Forums</a>
<a class="dropdown-item" href="#">Updates</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Spam</a>
<a class="dropdown-item" href="#">Trash</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">New</a>
</div>
</div>
<div class="btn-group dropdown-action">
<button type="button" data-toggle="dropdown" class="btn btn-white dropdown-toggle"><i class="fas fa-tags"></i> <i class="fas fa-angle-down"></i></button>
<div role="menu" class="dropdown-menu">
<a class="dropdown-item" href="#">Work</a>
<a class="dropdown-item" href="#">Family</a>
<a class="dropdown-item" href="#">Social</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Primary</a>
 <a class="dropdown-item" href="#">Promotions</a>
<a class="dropdown-item" href="#">Forums</a>
</div>
</div>
</div>
<div class="float-left">
<input type="text" placeholder="Search Messages" class="form-control search-message">
</div>
</div>
<div class="col-sm-3 col-md-4 col-4 top-action-right">
<div class="text-right">
<span class="text-muted d-none d-md-inline-block">Showing 10 of 112 </span>
<button type="button" title="Refresh" data-toggle="tooltip" class="btn btn-white d-none d-md-inline-block"><i class="fas fa-sync-alt"></i></button>
<div class="btn-group">
<a class="btn btn-white"><i class="fas fa-angle-left"></i></a>
<a class="btn btn-white"><i class="fas fa-angle-right"></i></a>
</div>
</div>
</div>
</div>
</div>
<div class="email-content">
<div class="table-responsive">
<table class="table table-inbox table-hover">
<thead class="thead-light">
<tr>
<th colspan="6">
<input type="checkbox" class="checkbox-all">
</th>
</tr>
</thead>
<tbody>
<tr class="unread clickable-row" data-href="mail-view.php">
<td>
<input type="checkbox" class="checkmail">
</td>
<td><span class="mail-important"><i class="fas fa-star starred"></i></span></td>
<td class="name">John Doe</td>
<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
<td><i class="fas fa-paperclip"></i></td>
<td class="mail-date">13:14</td>
</tr>
<tr class="unread clickable-row" data-href="mail-view.php">
<td>
<input type="checkbox" class="checkmail">
</td>
<td><span class="mail-important"><i class="far fa-star"></i></span></td>
<td class="name">Envato Account</td>
<td class="subject">Important account security update from Envato</td>
<td></td>
<td class="mail-date">8:42</td>
</tr>
<tr class="clickable-row" data-href="mail-view.php">
<td>
<input type="checkbox" class="checkmail">
</td>
<td><span class="mail-important"><i class="far fa-star"></i></span></td>
<td class="name">Twitter</td>
<td class="subject">HRMS Bootstrap Admin Template</td>
<td></td>
<td class="mail-date">30 Nov</td>
</tr>
<tr class="unread clickable-row" data-href="mail-view.php">
<td>
<input type="checkbox" class="checkmail">
</td>
<td><span class="mail-important"><i class="far fa-star"></i></span></td>
<td class="name">Richard Parker</td>
<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
<td></td>
<td class="mail-date">18 Sep</td>
</tr>
<tr class="clickable-row" data-href="mail-view.php">
<td>
<input type="checkbox" class="checkmail">
</td>
<td><span class="mail-important"><i class="far fa-star"></i></span></td>
<td class="name">John Smith</td>
<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
<td></td>
<td class="mail-date">21 Aug</td>
</tr>
<tr class="clickable-row" data-href="mail-view.php">
<td>
<input type="checkbox" class="checkmail">
</td>
<td><span class="mail-important"><i class="far fa-star"></i></span></td>
<td class="name">me, Robert Smith (3)</td>
<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
<td></td>
<td class="mail-date">1 Aug</td>
</tr>
<tr class="unread clickable-row" data-href="mail-view.php">
<td>
<input type="checkbox" class="checkmail">
</td>
<td><span class="mail-important"><i class="far fa-star"></i></span></td>
<td class="name">Codecanyon</td>
<td class="subject">Welcome To Codecanyon</td>
<td></td>
<td class="mail-date">Jul 13</td>
</tr>
<tr class="clickable-row" data-href="mail-view.php">
<td>
<input type="checkbox" class="checkmail">
</td>
<td><span class="mail-important"><i class="far fa-star"></i></span></td>
<td class="name">Richard Miles</td>
<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
<td><i class="fas fa-paperclip"></i></td>
<td class="mail-date">May 14</td>
</tr>
<tr class="unread clickable-row" data-href="mail-view.php">
<td>
<input type="checkbox" class="checkmail">
</td>
<td><span class="mail-important"><i class="far fa-star"></i></span></td>
<td class="name">John Smith</td>
<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
<td></td>
<td class="mail-date">11/11/16</td>
</tr>
<tr class="clickable-row" data-href="mail-view.php">
<td>
<input type="checkbox" class="checkmail">
</td>
<td><span class="mail-important"><i class="fas fa-star starred"></i></span></td>
<td class="name">Mike Litorus</td>
<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
<td></td>
<td class="mail-date">10/31/16</td>
</tr>
</tbody>
</table>
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
</div>

</div>

<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/jquery.slimscroll.js"></script>

<script src="assets/js/app.js"></script>
</body>
</php>