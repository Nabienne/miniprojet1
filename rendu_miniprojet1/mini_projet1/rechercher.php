<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>Mini projet</title>
	<link rel="stylesheet" type="text/css" href="miniprojet1.css"></link>
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

  </div>
</nav>

	</header>
  </div>
    <form class="form-inline my-2 my-lg-0" method="post" action="">
    <p> Saisissez la quantité</p>
      <input name="Quantite"  class="form-control mr-sm-2" type="number" placeholder="seaech" aria-label="number" >
      <p>Saisissez un prix_min</p>
      <input name="min"  class="form-control mr-sm-2" type="number" placeholder="search" aria-label="number" >
      <p>Saisissez un prix_max</p>
      <input name="max"  class="form-control mr-sm-2" type="number" placeholder="search" aria-label="number" >
      <button class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit">Search</button>
    </form>
    </div>
    
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
$min=$_POST["min"];
$max=$_POST["max"];
$Quantite=$_POST["Quantite"]; 


if (isset($_POST['submit']))
     {
echo '<table border=1px solid width=60% weith=60%  class="tab" >
<thead >
  <tr>
    <th scope="col">nom</th>
    <th scope="col">prix unitaire</th>
    <th scope="col">Quantite  </th>
    <th scope="col">montant    </th>
  </tr>
</thead>
<tbody>';


    for($i=0;$i<count($lists);$i++){
        if ($Quantite<=$lists[$i]['Quantité'] && $min ==""   && $max =="") {
            if($lists[$i]['Quantité']<10){
              
                    echo "<tr class='deficit'>  
                  
                   <td >".$lists[$i]['Produits']."</td>
                    <td >".$lists[$i]['Prix']."</td>
                    <td>".$lists[$i]['Quantité']."</td>
                    <td>".$lists[$i]['Prix']*$lists[$i]['Quantité']."</td>
                   </tr>";
                }
            
            else{
              echo "<tr>  
                  
              <td >".$lists[$i]['Produits']."</td>
               <td >".$lists[$i]['Prix']."</td>
               <td>".$lists[$i]['Quantité']."</td>
               <td>".$lists[$i]['Prix']*$lists[$i]['Quantité']."</td>
              </tr>";
        
                }
            }
        
            if ($min<=$lists[$i]['Prix'] && $max ==""  && $Quantite=="") {
              if($lists[$i]['Quantité']<10){
              
                echo "<tr class='deficit'>  
              
               <td >".$lists[$i]['Produits']."</td>
                <td >".$lists[$i]['Prix']."</td>
                <td>".$lists[$i]['Quantité']."</td>
                <td>".$lists[$i]['Prix']*$lists[$i]['Quantité']."</td>
               </tr>";
            }
        
        else{
          echo "<tr>  
              
          <td >".$lists[$i]['Produits']."</td>
           <td >".$lists[$i]['Prix']."</td>
           <td>".$lists[$i]['Quantité']."</td>
           <td>".$lists[$i]['Prix']*$lists[$i]['Quantité']."</td>
          </tr>";
    
            }
        }
        if ($max>=$lists[$i]['Prix'] && $min ==""  && $Quantite=="") {
          if($lists[$i]['Quantité']<10){
          
            echo "<tr class='deficit'>  
          
           <td >".$lists[$i]['Produits']."</td>
            <td >".$lists[$i]['Prix']."</td>
            <td>".$lists[$i]['Quantité']."</td>
            <td>".$lists[$i]['Prix']*$lists[$i]['Quantité']."</td>
           </tr>";
        }
    
    else{
      echo "<tr>  
          
      <td >".$lists[$i]['Produits']."</td>
       <td >".$lists[$i]['Prix']."</td>
       <td>".$lists[$i]['Quantité']."</td>
       <td>".$lists[$i]['Prix']*$lists[$i]['Quantité']."</td>
      </tr>";

        }
    }

    
    if($Quantite<=$lists[$i]['Quantité'] && $max>=$lists[$i]['Prix'] && $min<=$lists[$i]['Prix'] && $max>$min){
       if($lists[$i]['Quantité']<10){
          
            echo "<tr class='deficit'>  
          
           <td >".$lists[$i]['Produits']."</td>
            <td >".$lists[$i]['Prix']."</td>
            <td>".$lists[$i]['Quantité']."</td>
            <td>".$lists[$i]['Prix']*$lists[$i]['Quantité']."</td>
           </tr>";
        }
    
    else{
      echo "<tr>  
          
      <td >".$lists[$i]['Produits']."</td>
       <td >".$lists[$i]['Prix']."</td>
       <td>".$lists[$i]['Quantité']."</td>
       <td>".$lists[$i]['Prix']*$lists[$i]['Quantité']."</td>
      </tr>";

        }

    }
    
  } 
    echo "</tbody></table>";
    
}
?>   
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/1.jpeg" class="d-block w-80" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/2.jpeg" class="d-block w-80" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/3.jpeg" class="d-block w-80" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/4.jpeg"class="d-block w-80" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../images/5.jpeg" class="d-block w-80" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>