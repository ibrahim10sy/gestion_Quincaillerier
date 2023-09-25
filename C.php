
<?php 

require "connexion.php";





//fonction generer matricule
function genererMatriculeCommande() {
    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $digits = '0123456789';
                                      
    $matricule = 'CMD';
    for ($i = 0; $i < 2; $i++) {
        $matricule .= $letters[rand(0, strlen($letters) - 1)];
    }
    for ($i = 0; $i < 2; $i++) {
        $matricule .= $digits[rand(0, strlen($digits) - 1)];
    }

    return $matricule;
}


if(isset($_POST['idp'])) {
    $idProduit = $_POST['idp'];
  
    // Effectuez une requête pour récupérer les détails du produit en fonction de l'ID
    $req = $db->prepare('SELECT * FROM stocks WHERE idp = :id');
    $req->bindParam(':id', $idProduit);
    $req->execute();
  
    if($ligne = $req->fetch()) {
      // Construisez un tableau avec les détails du produit
      $detailsProduit = array(
        'prixunitaire' => $ligne['prixunitaire'],
        'description' => $ligne['description'],
        'quantite' => $ligne['quantite']
      );
  
      // Renvoyez les détails du produit au format JSON
      echo json_encode($detailsProduit);
    }
  }
  
 

?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ajouter Client </title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link href="../../../../css?family=Roboto:300,400,500,700,900" rel="stylesheet">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">

<link rel="stylesheet" href="assets/css/select2.min.css">

<link rel="stylesheet" href="assets/plugins/datetimepicker/css/tempusdominus-bootstrap-4.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"> -->
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
<a href="#"><img src="assets/img/sidebar/icon-2.png" alt="icon"> <span> Client</span> <span class="menu-arrow"></span></a>
<ul class="list-unstyled" style="display: none;">
<li><a href="ajouter-client.php"><span>Ajouter Client</span></a></li>
<li><a class="active" href="liste-client.php"><span>Liste Clients</span></a></li>
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
<li><a href="commande-form.php"><span>Passer Commandes</span></a></li>
<li><a href="liste-commande.php"><span>Liste Commandes</span></a></li>
</ul>
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
<h5 class="text-uppercase mb-0 mt-0 page-title">Passer Commande</h5>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<ul class="breadcrumb float-right p-0 mb-0">
<li class="breadcrumb-item"><a href="accueil.php"><i class="fas fa-home"></i> Dashboard</a></li>
<li class="breadcrumb-item"><a href="accueil.php">Commandes</a></li>
<li class="breadcrumb-item"><span> Tous les commandes</span></li>
</ul>
</div>
</div>
</div>
<div class="page-content">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<form  action="commande-form.php" method="POST"> 
<div class="form-group">
<label>Nom Client</label>
  <br>
        <select name="idclt" id="idclt" class="form-control">
            <option value="" > Choisir un client </option>
            <?php 
                $req = $db->query('select * from client');

                while($ligne = $req ->fetch()){
                    if(isset($_POST['idclt']) && $ligne['idclt']== $_POST['idclt']){
                        echo '<option value="'.$ligne['idclt'].'" selected>'.$ligne['prenomclt'].' '
                        .$ligne['nomclt']. '</option>';
                    } else{
                        echo '<option value="'.$ligne['idclt'].'">'.$ligne['prenomclt'] .' '
                        .$ligne['nomclt'] .'</option>';
                    }
                }
            
            ?>
        </select>
    
</div>
<div class="form-group">
<label>Prix Produit</label>
<input type="number"  min="1" class="form-control" name="prixunitaire"  id="prixunitaire" value="<?php if(isset($_POST['prixunitaire'])) echo $_POST['prixunitaire'] ?>">
</div>

<!-- </form> -->
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-12">
<!-- <form> -->
<div class="form-group">
<label>Nom Produit</label>
  <br>
        <select name="idp" id="idp" class="form-control">
            <option value="" > Choisir un produit </option>
            <?php 
                $req = $db->query('select * from stocks');

                while($ligne = $req ->fetch()){
                    if(isset($_POST['idp']) && $ligne['idp']== $_POST['idp']){
                        echo '<option value="'.$ligne['idp'].'" selected>'.$ligne['nomp']. '</option>';
                    } else{
                        echo '<option value="'.$ligne['idp'].'">'.$ligne['nomp'] 
                        .'</option>';
                    }
                }
            
            ?>
        </select>
    
</div>

<div class="form-group">
<label>Description Produit</label>
<input type="text" class="form-control" name="descr" id="descr" value="<?php if(isset($_POST['descr'])) echo $_POST['descr'] ?>">
</div>


<div class="form-group" >
<label>Quantite</label>
<input type="number"  min="0" class="form-control" name="quantite" id="quantite"  value="<?php if(isset($_POST['quantite'])) echo $_POST['quantite'] ?>">
</div>

<?php if(isset($_GET['idm'])){ ?>
     <div class="btn btn-primary mr-2">
        <!-- <label for="">&nbsp;</label> -->
        <input type="hidden" name="idclt" value="<?php if(isset($_POST['idclt'])) echo $_POST['idclt'] ?>">
        <input type="submit" class="btn" name="modifier" value="Modifier"  style="color:white;">
        </div>
        <?php }else{?>
        <div class="btn btn-primary mr-2 " style="margin-left: -70px;">
            <input type="submit" class="btn" name="enregistrer" value="Ajouter"  style="color:white;">
        </div>
        <?php }?>




</div>


</form>

</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<!-- <form action="#" method="POST"> -->
<div class="form-group text-center custom-mt-form-group">
<!-- <button class="btn btn-primary mr-2" type="submit" name="enregistrer" id="enregistrer">Enregistrer</button> -->
<!-- 
    <?php 
    // if(isset($_GET['idm'])){ 
        ?>
     <div class="btn btn-primary mr-2">
        <label for="">&nbsp;</label>
        <input type="hidden" name="idclt" value="<?php if(isset($_POST['idclt'])) echo $_POST['idclt'] ?>">
        <input type="submit" class="btn" name="modifier" value="Modifier"  style="color:white;">
        </div>
        <?php
    //  }else{
        ?>
        <div class="btn btn-primary mr-2">
            <input type="submit" class="btn" name="enregistrer" value="Enregistrer"  style="color:white;">
        </div>
        <?php 
        // }
        ?> -->
</div>


<div class="card-body">
<div class="row">
<div class="col-md-12">
<div class="table-responsive">
<table class="table custom-table">
<thead class="thead-light">
<tr>
<th>Id </th>
<th>Mtricule-Produit</th>
<th>Nom Client</th>
<th>Nom Produit</th>
<th>Prix Produit</th>
<th>Description Produit</th>
<th>Quantite</th>
<th>Date Commande</th>
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
<td>5</td>
<td>B</td>
<td>B</td>
<td>10.00am</td>
<td>20/1/2019</td>
<td class="text-right">
<a href="commande-form.php" class="btn btn-primary btn-sm mb-1">
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
<!-- </form> -->
</div>
</div>
</div>
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



</div>




<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/jquery.slimscroll.js"></script>

<script src="assets/js/select2.min.js"></script>

<script src="assets/js/moment.min.js"></script>
<script src="assets/plugins/datetimepicker/js/tempusdominus-bootstrap-4.min.js"></script>

<script src="assets/js/app.js"></script>

<script>

//  $(document).ready(function() {
//         $('#idp').change(function() {
//             var selectedProduct = $(this).val();
            
//             // Effectuer la requête AJAX
//             $.ajax({
//                 url: 'commande-form.php',
//                 type: 'POST',
//                 data: {idp: selectedProduct},
//                 dataType: 'json',
//                 success: function(response) {
//                     // Mettre à jour les champs du formulaire avec les données reçues
//                     $('#prixunitaire').val(response.prixunitaire);
//                     $('#descr').val(response.description);
//                     $('#quantite').val(response.quantite);
//                 },
//                 error: function(xhr, status, error) {
//                     console.log(error); // Gérer les erreurs éventuelles
//                 }
//             });
//         });
//     });

$(document).ready(function() {
  $('#idp').change(function() {
    var idProduit = $(this).val(); // Récupérer l'ID du produit sélectionné

    // Effectuer une requête AJAX
    $.ajax({
      url: 'commande-form.php',
      method: 'POST',
      data: { idp: idProduit }, // Envoyer l'ID du produit au script PHP
      dataType: 'json',
      success: function(response) {
        // Mettre à jour les champs avec les détails du produit
        $('#prixunitaire').val(response.prixunitaire);
        $('#descr').val(response.descr);
        $('#quantite').val(response.quantite);
      },
      error: function(xhr, status, error) {
        console.log(error); // Gérer les erreurs
      }
    });
  });
});


</script>



</body>
</html>