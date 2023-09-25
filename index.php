

<?php 

session_start();

require 'connexion.php';
if(isset($_POST['submit'])){
	if(isset($_POST['username'],$_POST['password'])){
		$req=$db->query('SELECT * from utilisateur where username="'.
		$_POST['username'].'" and password="'.$_POST['password'].'"');
		if($ligne=$req->fetch()){
			$_SESSION['username']=$ligne['username'];
		 echo "<script> alert('connexion réeussi'  ) </script>";
		 //    header('Location:accueil.php');
			echo "<script>window.open('accueil.php','_self')</script>";
			
		}else{
		 echo "<script> alert('Email ou Mot de Passe Incorrect') </script>";
		 //    header('Location:login.php');
		 //    echo  ' Identifiant ou Mot de Passe Incorrect ';
		 

		}
	}
   
}
 




?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link href="../../../../css?family=Roboto:300,400,500,700,900" rel="stylesheet">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<!--[if lt IE 9]>
		<script src="assets/js/php5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div class="main-wrapper">
<div class="account-page">
<div class="container">
<h3 class="account-title text-white">Se connecter</h3>
<div class="account-box">
<div class="account-wrapper">
<div class="account-logo">
<a href="#">G-QUINCAILLERIE</a>
</div>
<form action="accueil.php" method="POST">
<div class="form-group">
<label>Nom d'utilisateur *</label>
<input type="text" class="form-control" placeholder="nom d'utilisateur" name="username">
</div>
<div class="form-group">
<label>Password *</label>
<input type="password" class="form-control" placeholder="mot de passe" name="password">
</div>
<div class="form-group text-center custom-mt-form-group">
<button class="btn btn-primary btn-block account-btn" type="submit" name="submit">Connexion</button>
</div>
<div class="text-center">
<a href="#">Mot de passe oublier ?</a> |   <a href="register.php">S'inscrire</a>
</div>
</form>
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
</html>