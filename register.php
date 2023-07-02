
<?php

    require 'connexion.php';
    if (isset($_POST['submit'])) {
        if (isset($_POST['username'], $_POST['email'], $_POST['password']));
		// try{
        $req = $db->prepare('insert into utilisateur(username,email,password) values(?,?,?)');
        $req->bindValue(1, $_POST['username']);
        $req->bindValue(2, $_POST['email']);
        $req->bindValue(3, $_POST['password']);
        $req->execute();
		if($ligne=$req->fetch()){
		 
		 echo "<script> alert('Inscriotion échouer') </script>";
			
		}else{
		 echo "<script> alert('inscription réeussi'  ) </script>";
		 echo "<script>window.open('login.php','_self')</script>";

		}
	

    }
    
?>






<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Création de compte</title>
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
<h3 class="account-title text-white">Créer un compte</h3>
<div class="account-box">
<div class="account-wrapper">
<div class="account-logo">
<a href="index.php"><img src="assets/img/logo.png" alt="School-admin"></a>
</div>
<form action="register.php" method="POST">
<div class="form-group">
<label>Nom d'utilisateur *</label>
<input type="text" class="form-control" placeholder="nom d'utilisateur" name="username">
</div>
<div class="form-group">
<label>Email *</label>
<input type="text" class="form-control" placeholder="email" name="email">
</div>
<div class="form-group">
<label>Mot de passe  *</label>
<input type="password" class="form-control" placeholder="mot de passe"  name="password">
</div>
<!-- <div class="form-group">
<label>Confirmez mot de passe  *</label>
<input type="password" class="form-control" placeholder="confirmez votre mot de passe">
</div> -->
<div class="form-group text-center custom-mt-form-group">
<button class="btn btn-primary btn-block account-btn" type="submit" name="submit" >S'enregister</button>
</div>
<div class="text-center">
<a href="login.php">Avez vous déjà un compte ? Se connecter </a>
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