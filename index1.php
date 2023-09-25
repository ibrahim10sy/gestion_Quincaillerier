<?php 
require "config.php";
require "connexion.php";

function genererDate() {
  
  $day = date ("d"); // 
  $month = date ("m");
  $annee = date("Y"); // Année actuelle

  $dates =  $annee .'-'. $month .'-'. $day ;
  return $dates;
}
//fonction generer matricule
// function genererMatricule() {
//     $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     $digits = '0123456789';
                                      
//     $matricule = 'FACT';
//     for ($i = 0; $i < 2; $i++) {
//         $matricule .= $letters[rand(0, strlen($letters) - 1)];
//     }
//     for ($i = 0; $i < 2; $i++) {
//         $matricule .= $digits[rand(0, strlen($digits) - 1)];
//     }

//     return $matricule;
// }

// Génération du matricule
function genererMatricules() {
    $prefixe = "ID:";
    $day = date ("d"); // Préfixe du matricule
    $month = date ("m");
    $annee = date("Y"); // Année actuelle
    $numeroAleatoire = mt_rand(1000, 9999); // Génération d'un numéro aléatoire
  
    $matricule = $prefixe . $annee . $month . $day .'.'. $numeroAleatoire;
    return $matricule;
  } 
  $dates = genererDate();

  function matriculeExiste($matricule) {
    // Vérifier dans la base de données si le matricule existe déjà
    // ...
 //  global $db;
    // $req = $db->query ("SELECT COUNT(*) AS count FROM invoice WHERE invoice_no = '$matricule'");
    // $result = $db->query($sql);
    

  // Vérification du résultat de la requête
  

  // Récupération du nombre de lignes retournées par la 
  // while($row = $stmt->fetch()){
    // $count = $row[
      // 'count'
  // ];

    // Retourner true si le matricule existe, false sinon
    // return $count > 0;
  
  
 



    // Retourner true si le matricule existe, false sinon
    return false;
  }
  $matricule = genererMatricules();

// Vérifier si le matricule existe déjà dans la base de données
while (matriculeExiste($matricule)) {
  $matricule = genererMatricules();
}

?>
<html>
  <head>
    <title>Passer Commande</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <link rel='stylesheet' href='https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css'>
    <script src="https://code.jquery.com/ui/1.13.0-rc.3/jquery-ui.min.js" integrity="sha256-R6eRO29lbCyPGfninb/kjIXeRjMOqY3VWPVk6gMhREk=" crossorigin="anonymous"></script>
    
  </head>
  <body>
    <?php 
    include_once "header.php"; 
    ?>

    <div class='container pt-5' style="width: 50%;">
      <h1 class='text-center text-primary' style="font-size: 30px; margin-top:20px;">Passer Commande</h1><hr>
      <?php
        if(isset($_POST["submit"])){
          $invoice_no=$_POST["invoice_no"];
          $invoice_date=date("Y-m-d",strtotime($_POST["invoice_date"]));
          $cname=mysqli_real_escape_string($con,$_POST["idclt"]);
          $caddress=mysqli_real_escape_string($con,$_POST["caddress"]);
          $ccity=mysqli_real_escape_string($con,$_POST["ccity"]);
          $grand_total=mysqli_real_escape_string($con,$_POST["grand_total"]);
         global $mat ;
        //  $mat= genererMatricule();
          $sql="insert into commandes (INVOICE_NO,INVOICE_DATE,CNAME,CADDRESS,CCITY,GRAND_TOTAL) values ('{$invoice_no}','{$invoice_date}','{$cname}','{$caddress}','{$ccity}','{$grand_total}') ";
          if($con->query($sql)){
            $sid=$con->insert_id;
            
            $sql2="insert into produit (SID,PNAME,PRICE,QTY,TOTAL) values ";
            $rows=[];
            for($i=0;$i<count($_POST["pname"]);$i++)
            {
              $pname=mysqli_real_escape_string($con,$_POST["pname"][$i]);
              $price=mysqli_real_escape_string($con,$_POST["price"][$i]);
              $qty=mysqli_real_escape_string($con,$_POST["qty"][$i]);
              $total=mysqli_real_escape_string($con,$_POST["total"][$i]);
              $rows[]="('{$sid}','{$pname}','{$price}','{$qty}','{$total}')";
            }
            $sql2.=implode(",",$rows);
            if($con->query($sql2)){
              echo "<div class='alert alert-success'>  Facture ajouter avec succès. <a href='print.php?id={$sid}' target='_BLANK'>Click </a> ici pour imprimer la facture </div> ";
            }else{
              echo "<div class='alert alert-danger'>Facture non ajouter.</div>";
            }
          }else{
            echo "<div class='alert alert-danger'>Facture non ajouter.</div>";
          }
        }
        
      ?>
      <form method='post' action='index1.php' autocomplete='off'>
        <div class='row'>
          <div class='col-md-4'>
            <h5 class='text-success'>Details Facture</h5>
            <div class='form-group'>
              <label>Matricule Facture</label>
              <input type='text' name='invoice_no' value="<?php echo $matricule; ?>" required class='form-control' width="50px">
             

            </div>
            <div class='form-group'>
              <label>Date Facture</label>
              <input type='text' name='invoice_date' value="<?php echo $dates ?>" id='date' required class='form-control'>
            </div>
          </div>
          <div class='col-md-8'>
            <h5 class='text-success'>Details Clients</h5>
            

            <div class="form-group">
          <label>Nom Client</label>
            <br>
        <select name='idclt' id="idclt" class="form-control">
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
            <div class='form-group'>
              <label>Adresse</label>
              <input type='text' name='caddress' required class='form-control'>
            </div>
            <div class='form-group'>
              <label>Ville</label>
              <input type='text' name='ccity' required class='form-control'>
            </div>
          </div>
        </div>
        <div class='row'>
          <div class='col-md-12'>
            <h5 class='text-success'>Details Produits</h5>
            <table class='table table-bordered' id="table-produits">
              <thead>
                <tr>
                  <th>Produit</th>
                  <th>Prix</th>
                  <th>Quantite</th>
                  <th>Total</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id='product_tbody' >
                <tr>
                  <!-- <td><input type='text' required name='pname[]' class='form-control'></td> -->
                  
              
              <td><input type='text' required name='pname[]' class='form-control'></td>

         

                  <td><input type='text' required name='price[]' class='form-control price'></td>
                  <td><input type='text' required name='qty[]' class='form-control qty'></td>
                  <td><input type='text' required name='total[]' class='form-control total'></td>
                  <td><input type='button' value='x' class='btn btn-danger btn-sm btn-row-remove'> </td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <td><input type='button' value='+ Ajouter' class='btn btn-primary btn-sm' id='btn-add-row'></td>
                     
                  <td colspan='2' class='text-right'>Total</td>
                  <td><input type='text' name='grand_total' id='grand_total' class='form-control' required></td>
                </tr>
              </tfoot>
            </table>
            <input type='submit' name='submit' value='Enregistrer Facture' class='btn btn-success float-right' style="margin-top: 10px;">
          </div>
        </div>
      </form>
    </div>
    <script>
      $(document).ready(function(){
        $("#date").datepicker({
          dateFormat:"dd-mm-yy"
        });
        
        $("#btn-add-row").click(function(){
          var row="<tr> <td><input type='text'   required value''  name='pname[]' class='form-control'></td> <td><input type='text' required name='price[]' class='form-control price'></td> <td><input type='text' required name='qty[]' class='form-control qty'></td> <td><input type='text' required name='total[]' class='form-control total'></td> <td><input type='button' value='x' class='btn btn-danger btn-sm btn-row-remove'> </td> </tr>";
          var row = 
// Assurez-vous que vous avez une connexion à la base de données $db avant d'utiliser cette partie de code.
// $db = new PDO('mysql:host=your_host;dbname=your_database', 'username', 'password');

// if (isset($_POST['idp'])) {
//     // Récupérez les informations du produit depuis la base de données
//     $idProduit = $_POST['idp'];
//     $requeteProduit = $db->prepare('SELECT idp, nomp, prixunitaire FROM stocks WHERE idp =' . $_GET['idp']);
//     $requeteProduit->execute(['idp' => $idProduit]);
//     $produit = $requeteProduit->fetch(PDO::FETCH_ASSOC);

//     // Affichez les valeurs dans les inputs
//     if ($produit) {
//         echo '<tr>';
//         echo '<td><input type="text" required name="pname[]" class="form-control" value="' . $produit['nomp'] . '"></td>';
//         echo '<td><input type="text" required name="price[]" class="form-control price" value="' . $produit['prixunitaire'] . '"></td>';
//         echo '<td><input type="text" required name="qty[]" class="form-control qty"></td>';
//         echo '<td><input type="text" required name="total[]" class="form-control total"></td>';
//         echo '<td><input type="button" value="x" class="btn btn-danger btn-sm btn-row-remove"></td>';
//         echo '</tr>';
//     }
// }


          $("#product_tbody").append(row);
        });
        
        $("body").on("click",".btn-row-remove",function(){
          if(confirm("Etes vous sûr de supprimer cette ligne?")){
            $(this).closest("tr").remove();
            grand_total();
          }
        });

        $("body").on("keyup",".price",function(){
          var price=Number($(this).val());
          var qty=Number($(this).closest("tr").find(".qty").val());
          $(this).closest("tr").find(".total").val(price*qty);
          grand_total();
        });
        
        $("body").on("keyup",".qty",function(){
          var qty=Number($(this).val());
          var price=Number($(this).closest("tr").find(".price").val());
          $(this).closest("tr").find(".total").val(price*qty);
          grand_total();
        });      
        
        function grand_total(){
          var tot=0;
          $(".total").each(function(){
            tot+=Number($(this).val());
          });
          $("#grand_total").val(tot);
        }
      });
    </script>
    <script>
//       document.getElementById('btn-add-row').addEventListener('click', function() {
//     var table = document.getElementById('table-produits');
//     var newRow = table.insertRow(table.rows.length);

//     var cell = newRow.insertCell(0);
//     var select = document.createElement('select');
//     select.setAttribute('class', 'form-select');
//     select.setAttribute('name', 'produits[]');

//     var options = document.querySelectorAll('#table-produits tr:first-child select option');
//     for (var i = 0; i < options.length; i++) {
//         var option = document.createElement('option');
//         option.setAttribute('value', options[i].value);
//         option.innerHTML = options[i].innerHTML;
//         select.appendChild(option);
//     }

//     cell.appendChild(select);
// });
    </script>




  </body>
</html>