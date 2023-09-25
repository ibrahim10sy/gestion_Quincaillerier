﻿<?php

session_start();

require "connexion.php";


//fonction pour obtenir le total des client
function getTotalClients()
{
    global $db;


    $query = $db->query('SELECT COUNT(*) AS total FROM client');

    $result = $query->fetch();

    return $result['total'];
}

$client = getTotalClients();

//fonction pour obtenir le total des fourisseurs
function getTotalFournisseurs()
{
    global $db;


    $query = $db->query('SELECT COUNT(*) AS total FROM fournisseur');

    $result = $query->fetch();

    return $result['total'];
}

$fournisseurs = getTotalFournisseurs();


//fonction pour obtenir le total des produits
function getTotalProduits()
{
    global $db;


    $query = $db->query('SELECT COUNT(*) AS total FROM stocks');

    $result = $query->fetch();

    return $result['total'];
}

$produits = getTotalProduits();


function getTotalSommes()
{
    global $db;


    $query = $db->query('SELECT SUM(GRAND_TOTAL) AS total FROM commandes');

    $result = $query->fetch();

    return $result['total'];
}

$total_somme = getTotalSommes();



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <link href="../../../../css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">

    <link rel="stylesheet" href="assets/css/fullcalendar.min.css">

    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

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
                            <span><?= isset($_SESSION['username']) ? $_SESSION['username'] : ' ' ?></span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="profile.php">My Profile</a>
                            <a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
                            <a class="dropdown-item" href="settings.php">Settings</a>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </li>
                </ul>
                <div class="dropdown mobile-user-menu float-right">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="profile.php">My Profile</a>
                        <a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
                        <a class="dropdown-item" href="settings.php">Settings</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>
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
                        <li class="active">
                            <a href="accueil.php"><img src="assets/img/sidebar/icon-1.png" alt="icon"><span>Dashboard</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/sidebar/icon-2.png" alt="icon"> <span> Clients</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="ajouter-client.php"><span>Ajouter Client</span></a></li>
                                <li><a href="liste-client.php"><span>Liste Client</span></a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/sidebar/icon-2.png" alt="icon"> <span> Fournisseurs</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="ajouter-frs.php"><span>Ajouter Fourisseurs</span></a></li>
                                <li><a href="liste-frs.php"><span>Liste Fourisseurs</span></a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/sidebar/icon-2.png" alt="icon"> <span> Produits</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="ajouter-produit.php"><span>Ajouter Produits</span></a></li>
                                <li><a href="liste-produit.php"><span>Liste Produits</span></a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><img src="assets/img/sidebar/icon-2.png" alt="icon"> <span> Commandes</span> <span class="menu-arrow"></span></a>
                            <ul class="list-unstyled" style="display: none;">
                                <li><a href="index1.php"><span>Passer Commandes</span></a></li>
                                <li><a href="liste-commande.php"><span>Liste Commandes</span></a></li>
                            </ul>
                        </li>

                        <!--  -->
                        <!--  -->
                        <!-- <li>
<a href="javascript:void(0);"><span>Level 1</span></a>
 </li> -->
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
                        <div class="col-md-6">
                            <h3 class="page-title mb-0">Dashboard</h3>
                        </div>
                        <div class="col-md-6">
                            <ul class="breadcrumb mb-0 p-0 float-right">
                                <li class="breadcrumb-item"><a href="accueil.php"><i class="fas fa-home"></i> Accueil</a></li>
                                <li class="breadcrumb-item"><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <span class="float-left"><img src="user.png" alt="" width="80"></span>
                            <div class="dash-widget-info text-right">
                                <span>Total Clients</span>
                                <h3> <?php echo $client; ?> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <div class="dash-widget-info text-left d-inline-block">
                                <span>Total Produits</span>
                                <h3><?php echo $produits; ?> </h3>
                            </div>
                            <span class="float-right"><img src="produit.png" width="80" alt=""></span>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <span class="float-left"><img src="user.png" alt="" width="80"></span>
                            <div class="dash-widget-info text-right">
                                <span>Total Fourisseurs</span>
                                <h3> <?php echo $fournisseurs; ?> </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <div class="dash-widget-info d-inline-block text-left">
                                <span>Total Gains</span>
                                <h3><?php echo $total_somme .  " FCFA"; ?></h3>
                            </div>
                            <span class="float-right"><img src="assets/img/dash/dash-4.png" alt="" width="80"></span>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
<div class="col-lg-6 d-flex">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-auto">
<div class="page-title">
Students Survay
</div>
</div>
<div class="col text-right">
<div class=" mt-sm-0 mt-2">
<button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></button>
 <div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#">Action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Another action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Something else here</a>
</div>
</div>
</div>
</div>
</div>
<div class="card-body">
<div id="chart1"></div>
</div>
</div>
</div>
<div class="col-lg-6 d-flex">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-auto">
<div class="page-title">
Student Performance
</div>
</div>
<div class="col text-right">
<div class=" mt-sm-0 mt-2">
<button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></button>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#">Action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Another action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Something else here</a>
</div>
</div>
</div>
</div>
</div>
<div class="card-body">
<div id="chart2"></div>
</div>
</div>
</div>
</div> -->
                <!-- <div class="row">
<div class="col-lg-6 col-md-12 col-12 d-flex">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-auto">
<div class="page-title">
Events
</div>
</div>
<div class="col text-right">
<div class=" mt-sm-0 mt-2">
<button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></button>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#">Action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Another action</a>
<div role="separator" class="dropdown-divider"></div>
 <a class="dropdown-item" href="#">Something else here</a>
</div>
</div>
</div>
</div>
</div>
<div class="card-body">
<div id="calendar" class=" overflow-hidden"></div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12 col-12 d-flex">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-auto">
<div class="page-title">
Total Member
</div>
</div>
<div class="col text-right">
<div class=" mt-sm-0 mt-2">
<button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></button>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#">Action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Another action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Something else here</a>
</div>
</div>
</div>
</div>
</div>
<div class="card-body d-flex align-items-center justify-content-center overflow-hidden">
<div id="chart3"> </div>
</div>
</div>
</div>
</div> -->
                <!-- <div class="row">
<div class="col-lg-6 col-md-12 col-12 d-flex">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-auto">
<div class="page-title">
Income Monthwise
</div>
</div>
<div class="col text-right">
<div class=" mt-sm-0 mt-2">
<button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></button>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#">Action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Another action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Something else here</a>
</div>
</div>
</div>
</div>
</div>
<div class="card-body">
<div id="chart4"></div>
</div>
</div>
</div>
<div class="col-lg-6 d-flex">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-auto">
<div class="page-title">
Exam List
</div>
</div>
<div class="col text-right">
<div class=" mt-sm-0 mt-2">
<button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></button>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#">Action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Another action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Something else here</a>
</div>
</div>
</div>
</div>
</div>
<div class="card-body">
<div class="row">
<div class="col-md-12">
<div class="table-responsive">
<table class="table custom-table">
<thead class="thead-light">
<tr>
<th>Exam Name </th>
<th>Subject</th>
<th>Class</th>
<th>Section</th>
<th>Time</th>
<th>Date</th>
<th class="text-right">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<a href="exam-detail.php" class="avatar bg-green">C</a>
</td>
<td>English</td>
<td>5</td>
<td>B</td>
<td>10.00am</td>
<td>20/1/2019</td>
<td class="text-right">
<a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<a href="exam-detail.php" class="avatar bg-purple">C</a>
</td>
<td>English</td>
<td>4</td>
<td>A</td>
<td>10.00am</td>
<td>2/1/2019</td>
<td class="text-right">
<a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<a href="exam-detail.php" class="avatar bg-green">C</a>
</td>
<td>Maths</td>
<td>6</td>
<td>B</td>
<td>10.00am</td>
<td>2/1/2019</td>
<td class="text-right">
<a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<a href="exam-detail.php" class="avatar bg-dark">C</a>
</td>
<td>Science</td>
<td>3</td>
<td>B</td>
<td>10.00am</td>
<td>20/1/2019</td>
<td class="text-right">
<a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<a href="exam-detail.php" class="avatar bg-green">C</a>
</td>
<td>Maths</td>
<td>6</td>
<td>B</td>
<td>10.00am</td>
<td>20/1/2019</td>
<td class="text-right">
<a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<a href="exam-detail.php" class="avatar bg-dark">C</a>
</td>
<td>English</td>
<td>7</td>
<td>B</td>
<td>10.00am</td>
<td>20/1/2019</td>
<td class="text-right">
<a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<a href="exam-detail.php" class="avatar bg-purple">C</a>
</td>
<td>Science</td>
<td>5</td>
<td>B</td>
<td>10.00am</td>
<td>20/1/2019</td>
<td class="text-right">
<a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div> -->
                <!-- <div class="row">
<div class="col-lg-12">
<div class="card">
<div class="card-header">
<div class="row align-items-center">
<div class="col-sm-6">
 <div class="page-title">
All Students
</div>
</div>
<div class="col-sm-6 text-sm-right">
<div class=" mt-sm-0 mt-2">
<button class="btn btn-outline-primary mr-2"><img src="assets/img/excel.png" alt=""><span class="ml-2">Excel</span></button>
<button class="btn btn-outline-danger mr-2"><img src="assets/img/pdf.png" alt="" height="18"><span class="ml-2">PDF</span></button>
<button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></button>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#">Action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Another action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Something else here</a>
</div>
</div>
</div>
</div>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table custom-table">
<thead class="thead-light">
<tr>
<th>Name </th>
<th>Student ID</th>
<th>Class</th>
<th>Section</th>
<th>Mobile</th>
<th>Date of Birth</th>
<th class="text-right">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<h2><a href="profile.php" class="avatar text-white"><img src="assets/img/profile/img-1.jpg" alt=""></a><a href="profile.php">Parker <span></span></a></h2>
</td>
<td>ST-0d001</td>
<td>1</td>
<td>A</td>
<td>973-584-58700</td>
<td>20/1/2021</td>
<td class="text-right">
<a href="edit-student.php" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.php" class="avatar text-white"><img src="assets/img/profile/img-2.jpg" alt=""></a><a href="profile.php">Smith <span></span></a></h2>
</td>
<td>ST-0d002</td>
<td>2</td>
<td>B</td>
<td>973-584-58700</td>
<td>20/1/2021</td>
<td class="text-right">
<a href="edit-student.php" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.php" class="avatar text-white"><img src="assets/img/profile/img-3.jpg" alt=""></a><a href="profile.php">Hensley<span></span></a></h2>
</td>
<td>ST-0d003</td>
<td>1</td>
<td>A</td>
<td>973-584-58700</td>
<td>20/1/2021</td>
<td class="text-right">
<a href="edit-student.php" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.php" class="avatar text-white"><img src="assets/img/profile/img-4.jpg" alt=""></a><a href="profile.php">Friesen<span></span></a></h2>
</td>
<td>ST-0d004</td>
<td>1</td>
<td>A</td>
<td>973-584-58700</td>
<td>20/1/2021</td>
<td class="text-right">
<a href="edit-student.php" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
 </button>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.php" class="avatar text-white"><img src="assets/img/profile/img-5.jpg" alt=""></a><a href="profile.php">Jackson<span></span></a></h2>
</td>
<td>ST-0d005</td>
<td>1</td>
<td>A</td>
<td>973-584-58700</td>
<td>20/1/2021</td>
<td class="text-right">
<a href="edit-student.php" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.php" class="avatar text-white"><img src="assets/img/profile/img-6.jpg" alt=""></a><a href="profile.php">Mason<span></span></a></h2>
</td>
<td>ST-0d006</td>
<td>1</td>
<td>A</td>
<td>973-584-58700</td>
<td>20/1/2021</td>
<td class="text-right">
<a href="edit-student.php" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.php" class="avatar text-white"><img src="assets/img/profile/img-7.jpg" alt=""></a><a href="profile.php">Garrett <span></span></a></h2>
</td>
<td>ST-0d007</td>
<td>1</td>
<td>A</td>
<td>973-584-58700</td>
<td>20/1/2021</td>
<td class="text-right">
<a href="edit-student.php" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div> -->
                <!-- <div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<div class="row align-items-center">
<div class="col-sm-6">
<div class="page-title">
New Students
</div>
</div>
<div class="col-sm-6 text-sm-right">
<div class=" mt-sm-0 mt-2">
<button class="btn btn-outline-primary mr-2"><img src="assets/img/excel.png" alt=""><span class="ml-2">Excel</span></button>
<button class="btn btn-outline-danger mr-2"><img src="assets/img/pdf.png" alt="" height="18"><span class="ml-2">PDF</span></button>
<button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h"></i></button>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="#">Action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Another action</a>
<div role="separator" class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Something else here</a>
</div>
</div>
</div>
</div>
</div>
<div class="card-body">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="table-responsive">
<table class="table custom-table">
<thead class="thead-light">
<tr>
<th>Name </th>
<th>Student ID</th>
<th>Parent Name</th>
<th>Mobile</th>
<th>Address</th>
<th>Date Of Admition</th>
<th>Fees Receipt</th>
<th class="text-right">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<h2><a href="profile.php" class="avatar text-white"><img src="assets/img/profile/img-1.jpg" alt=""></a><a href="profile.php">Parker <span></span></a></h2>
</td>
<td>ST-0d001</td>
<td>Mr. Johnson</td>
<td>973-584-58700</td>
<td>9946 Baker Rd. Marysville, </td>
<td>20/1/2021</td>
<td><img src="assets/img/pdf.png" alt=""></td>
<td class="text-right">
<a href="edit-student.php" class="btn btn-primary btn-sm mb-1">
 <i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.php" class="avatar text-white"><img src="assets/img/profile/img-2.jpg" alt=""></a><a href="profile.php">Smith <span></span></a></h2>
</td>
<td>ST-0d002</td>
<td>Mr. Luke Idaman</td>
<td>973-584-58700</td>
<td>193 S. Harrison Drive </td>
<td>20/1/2021</td>
<td><img src="assets/img/pdf.png" alt=""></td>
<td class="text-right">
<a href="edit-student.php" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.php" class="avatar text-white"><img src="assets/img/profile/img-3.jpg" alt=""></a><a href="profile.php">Hensley<span></span></a></h2>
</td>
<td>ST-0d003</td>
<td>Mr. Kevin H</td>
<td>973-584-58700</td>
<td>8949 Golf St. Palm Coast </td>
<td>20/1/2021</td>
<td><img src="assets/img/pdf.png" alt=""></td>
<td class="text-right">
<a href="edit-student.php" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.php" class="avatar text-white"><img src="assets/img/profile/img-4.jpg" alt=""></a><a href="profile.php">Friesen<span></span></a></h2>
</td>
<td>ST-0d004</td>
<td>Mr. Randy O</td>
<td>973-584-58700</td>
<td>23 Ohio Court Alexandria </td>
<td>20/1/2021</td>
<td><img src="assets/img/pdf.png" alt=""></td>
<td class="text-right">
<a href="edit-student.php" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.php" class="avatar text-white"><img src="assets/img/profile/img-5.jpg" alt=""></a><a href="profile.php">Jackson<span></span></a></h2>
</td>
<td>ST-0d005</td>
<td>Mr. Steven</td>
<td>973-584-58700</td>
<td>338 North Cleveland Rd </td>
<td>20/1/2021</td>
<td><img src="assets/img/pdf.png" alt=""></td>
<td class="text-right">
<a href="edit-student.php" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.php" class="avatar text-white"><img src="assets/img/profile/img-6.jpg" alt=""></a><a href="profile.php">Mason<span></span></a></h2>
</td>
<td>ST-0d006</td>
<td>Mr. Ervin</td>
<td>973-584-58700</td>
<td>7909 W. Sunnyslope St. </td>
<td>20/1/2021</td>
<td><img src="assets/img/pdf.png" alt=""></td>
<td class="text-right">
<a href="edit-student.php" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
<tr>
<td>
<h2><a href="profile.php" class="avatar text-white"><img src="assets/img/profile/img-7.jpg" alt=""></a>
<a href="profile.php">Garrett <span></span></a></h2>
</td>
<td>ST-0d007</td>
<td>Mr. Marquz</td>
<td>973-584-58700</td>
<td>7361 Dunbar Street </td>
<td>20/1/2021</td>
<td><img src="assets/img/pdf.png" alt=""></td>
<td class="text-right">
<a href="edit-student.php" class="btn btn-primary btn-sm mb-1">
<i class="far fa-edit"></i>
</a>
<button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
<i class="far fa-trash-alt"></i>
</button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div> -->
                <!-- <div class="notification-box">
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
</div> -->
            </div>
        </div>

    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/jquery.slimscroll.js"></script>

    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/moment.min.js"></script>

    <script src="assets/js/fullcalendar.min.js"></script>
    <script src="assets/js/jquery.fullcalendar.js"></script>

    <script src="assets/plugins/morris/morris.min.js"></script>
    <script src="assets/plugins/raphael/raphael-min.js"></script>
    <script src="assets/js/apexcharts.js"></script>
    <script src="assets/js/chart-data.js"></script>

    <script src="assets/js/app.js"></script>
</body>

</html>