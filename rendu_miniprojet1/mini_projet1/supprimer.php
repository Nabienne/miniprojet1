
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>Mini projet</title>
	<link rel="stylesheet" type="text/css" href="miniprojet1.css"></link>
</head>
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="page_de_connexion.php">Page de connexion <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="lister.php">Lister les produit</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Modifications
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ajouter.php">Ajouter un produit</a>
          <a class="dropdown-item" href="supprimer.php">Supprimer un produit</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="update.php">Mis à jour de produit</a>
           <a class="dropdown-item" href="rechercher.php">Rechercher un produit</a>
        </div>
      </li>

    </ul>

  </div>
</nav>

	</header>

  <form class="form-inline my-2 my-lg-0" action="supprimer.php" method="POST">
      <input name="prosup"   class="form-control mr-sm-2" type="ok" placeholder="supprimer" aria-label="ok">
      <button class="btn btn-outline-success my-2 my-sm-0" name="valider" type="submit">supprimer</button>
    </form>
    <?php 


    ?>

   

	<?php 
 $lists = array(
  array("Produits" => 'Al Quran', "Prix" =>'5000',"Quantité" =>'30',"Montant_total"=>''),
  array("Produits" => 'Quran multicolor', "Prix" =>'40000',"Quantité" =>'45',"Montant_total"=>''),
  array("Produits" => 'Sahihul Muslim', "Prix" =>'3000',"Quantité" =>'10',"Montant_total"=>''),
  array("Produits" => 'calendrier musulman', "Prix" =>'400',"Quantité" =>'9',"Montant_total"=>''),
  array("Produits" => 'Les quatres Khalifs', "Prix" =>'2000',"Quantité" =>'3',"Montant_total"=>''),
  array("Produits" => 'Les 40 rabbannas', "Prix" =>'600',"Quantité" =>'21',"Montant_total"=>''),
  array("Produits" => 'Djouzoul ama', "Prix" =>'1000',"Quantité" =>'3',"Montant_total"=>''),
  array("Produits" => 'Sahih de Boukhary', "Prix" =>'25000',"Quantité" =>'10',"Montant_total"=>''),
  array("Produits" => 'Sahih de Muslim', "Prix" =>'2500',"Quantité" =>'5',"Montant_total"=>''),
  array("Produits" => 'La vie et oeuvre du Prophete SAW', "Prix" =>'3500',"Quantité" =>'5',"Montant_total"=>''),
  array("Produits" => 'Bibliographie du prophete SAW ', "Prix" =>'7000',"Quantité" =>'55',"Montant_total"=>'')
);
?>

<?php 
if(isset($_POST['valider'])){
  $prosup=$_POST["prosup"];
  for($i=0;$i<count($lists);$i++){
    if($prosup==$lists[$i]["Produits"]){
      unset($lists[$i]);
    }
  }
}


echo'<table border=1px solid width=60% weith=60%  class="tab" >
<thead >
<tr>
  <th scope="col">nom</th>
  <th scope="col">prix unitaire</th>
  <th scope="col">Quantite  </th>
  <th scope="col">montant total </th>
</tr>
</thead>';
  for($i=0;$i<=count($lists);$i++){
  $taille=$lists[$i];
  

if($taille["Quantité"]<10 && $taille["Produits"]!="") {
  $Montant_total=$taille["Quantité"]*$taille["Prix"];	
  echo ' 
  <tr>
    <td class="deficit">'.$taille["Produits"].'</td> 
    <td class="deficit">'.$taille["Prix"].'</td>
    <td class="deficit">'.$taille["Quantité"].'</td> 
    <td class="deficit">'.$Montant_total.'</td> 

  </tr>
 ';
}
else if($taille["Quantité"]>=10 && $taille["Produits"]!="") {
  
  $Montant_total=$taille["Quantité"]*$taille["Prix"];	
echo '       
		<tr>
      <td>'.$taille["Produits"].'</td>
			<td>'.$taille["Prix"].'</td>
			<td>'.$taille["Quantité"].'</td>
			<td>'.$Montant_total.'</td>

		</tr>
	 ';
}
}
echo"</table>";
?> 
 <p>
<em> <marquee behavior="alternate" direction="right"> <strong> Nous  vous remercions de votre fidélité</strong>  </marquee> </em> <br>
   </p>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 </body>
</html> 

