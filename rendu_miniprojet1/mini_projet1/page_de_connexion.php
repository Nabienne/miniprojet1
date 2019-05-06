
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Mini Projet</title>
	<link rel="stylesheet" type="text/css" href="miniprojet1.css"></link>
</head>
<body>

	<center>
	<h1>
		<p><em> <marquee behavior="alternate" direction="right"> <h1> Bienvenue à notre boutique ! </h1></marquee> </em>  </p>
	</h1>
	<h2> <p> <strong>Veuillez remplir les champs ci-dessous</strong> </p>  </h2> <br>
<form action="page_de_connexion.php" method="post">
	<table>

	    <tr>
			<td><p> <em> <strong>Login</strong> </em> </p> </td>
			<td> <div class="input-group mb-2">@<input type="texte" name="login" required="required" placeholder="exemple123@gmail.com"></div> </td>
		</tr>

		<tr>
			<td> <p> <em> <strong> Mot de passe</strong></em></p> </td>
			<td> <input type="password" name="mdp" required="required" placeholder="MDP">
    </td>
	 <td>	<p> entre 8-20 caractères .</p></td>
		</tr>
		<tr>
		<td>
		<input class="form-check-input" type="checkbox" id="inlineFormCheck">
    <label class="form-check-label" for="inlineFormCheck">
    </label>
		</td>
		<td><p>se souvenir de moi</p></td>
		</tr>
	  <tr>
		<td> <p><strong>Appuyer sur valider</strong>  </p> </td>
	    <td><input type="submit" name="envoyer"></td>
	  </tr>
	
	</table>
</form>
</center>

 <?php
	$users=array(
	array('Léna','lenandiongue@gmail.com','lenadevweb'),
	array('Ndioba','ndioba@gmail.com','ndiobadevweb'),
	array('Nabienne','nabienne@gmail.com','nabiennedevweb')
	);
	if(isset($_POST['envoyer'])){
		// $login=$_POST['login'];
		// $mdp=$_POST['mdp'];
		// 	//if($users[$indice][1]!=$_POST['login'] and $users[$indice][2]!=$_POST['mdp'] ) {
				for($indice=0; $indice<3; $indice++){
					if($users[$indice][1]== $_POST['login'] && $users[$indice][2]== $_POST['mdp'] ) {
				header("location:accueil.php");	

				
			}
		}
	}
?>

<?php
	/*if(isset($_POST['envoyer'])){
	if($users[$indice][1]!=$_POST['login'] and $users[$indice][2]!=$_POST['mdp'] ) {
	header("location:page_de_connexion.php");	
	echo "Vous n'etes pas enrégistré sur le site";
	}
	}*/


?>
 	



<div id="conteneurfooter"></div>
<div id="footer">
 	 <footer>
 	 <p>
<em> <marquee behavior="alternate" direction="right"> <strong> Nous  vous remercions de votre fidélité</strong>  </marquee> </em> <br>
   </p>
<p> &copy N@bienne et Dioba, tous droits réservés</p>
</footer>
</div>


 </body>
</html>
