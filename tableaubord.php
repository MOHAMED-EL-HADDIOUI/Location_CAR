<?php require_once('connexion.php');  ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="loccar_style.css" type="text/css"/>
<title>Tableau de bord</title>
<style>
	.photocar{
	width: 130px;
	height: 100px;
	border-radius: 5%;
	border: 1px solid ;
      }
	#conteur
     {
	margin-left : 65px; 
	width: 900px;
      }
	body{
		background-color: aqua;
	}
</style>
</head>
<body background="IMAGES/backgroun.jpg">
<div id="conteur">
	<header>
    <div id="f">
    	<a href="index.php"><div class="P1"></br><b>Menu</b></div></a>
        <div class="P2"></div>
    	<a href="About.php"><div class="P3"></br><b>About</b></div></a>
        <div class="P4"></div>
    	<a href="Services.php"><div class="P5"></br><b>Services</b></div></a>
        <div class="P6"></div>
    	<a href="Projects.php"><div class="P7"></br><b>Projects</b></div></a>
        <div class="P8"></div>
    	<a href="Clients.php"><div class="P9"></br><b>Clients</b></div></a>
        <div class="P10"></div>
    	<a href="Contacts.php"><div class="P11"></br><b>Contacts</b></div></a>
    </div>
	</header>
</div>
<br>
<br>
<p><h1><b>Liste des Voitures...</b></h1> 
<?php 
	$reqselect="select * from automobile";
	$resultat=mysqli_query($cnloccar,$reqselect);
	$nbr=mysqli_num_rows($resultat);
	echo "<p> Total <b>".$nbr."</b> Voitures...</p>";
?></p>
<p><a href="Ajouter.php"><img src="IMAGES/pngegg.png" width="50px"height="50px"></a></p>
<table width="100%" border="1" background="IMAGES/backgroun.jpg">
	<tr>
	<th>Immatriculation</th>
	<th>Marque</th>
	<th>Prix de Location </th>
	<th>Photo</th>
	<th>Supprimer</th>
	<th>Modifier</th>
	</tr>
	<?php
	while($ligne=mysqli_fetch_assoc($resultat))
	{
	?>
	<tr>
		<td><?php echo $ligne['IMM']; ?></td>
		<td><?php echo $ligne['MARQUE']; ?></td>
		<td><?php echo $ligne['PRIX_LOC']; ?></td>
		<td><img src='<?php echo $ligne['PHOTO']; ?>' class="photocar"></td>
		<td><a href="Supprimer.php?supcar=<?php echo $ligne['IMM']; ?>"><img src="IMAGES/supprimer.png" width="50px" height="50px"></a></td>
		<td><a href="Modifier.php?mod=<?php echo $ligne['IMM']; ?>"><img src="IMAGES/accessories-text-editor-icon.png" width="50px" height="50px"></a></td>
	
	</tr>
	<?php
		
		
	}
	?>
</table>
</body>
</html>
