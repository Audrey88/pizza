<!DOCTYPE html>
<html>
<head>
	<script language="javascript"> function liste(form5) { 
alert("L\'élément " + (form5.list.selectedIndex + 1)); }
</SCRIPT> 
</head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="style.css">
<body>
<!-- php script -->
<table border=1>
<th>Pizzas</th>
<tbody>
<?php 
        $fichier = 'res/catalogue-pizzas.xml';
        $xml = simplexml_load_file($fichier);

foreach ($xml as $pizza) {
	$picz = $pizza->image;
	$nom = $pizza->nom;
	$comp = $pizza->composition;
	$l = $pizza->prix->attributes()->{'taille_l'};
	$xl = $pizza->prix->attributes()->{'taille_xl'};
	$xxl = $pizza->prix->attributes()->{'taille_xxl'};

        echo    "<tr>
                <td><img src='$picz' width='160' height='120'></td>
                <td>$nom</td>
                <td>$comp</td>
                <td>

<FORM NAME='form5'> 
<SELECT NAME='list'> 
<OPTION VALUE='1'>Taille L : $l euros
<OPTION VALUE='2'>Taille XL : $xl euros
<OPTION VALUE='3'>Taille XXL : $xxl euros
</SELECT> 
<INPUT TYPE='button'NAME='b' VALUE='OK' onClick='liste(form5)'> </FORM>

                </tr>";


    }
?>
</tbody>
</table>

<!-- php script -->

<div id="Nom"> <h1> Tour de Pisa! <h1> </div>

	<div id="logo">(logo) </div>

	<div id="list"> 
		<h3>Nos pizzas </h3>
</div>

	<div id="open"> 

		<p> ouvert: 7/24 </p>

</div>

	<div id="command"> <h3> Commandez! <h3>
 </div>

	<div id="stefano"> <img src="public/Cuisto">
 </div>
	
	<div id="text"> <p> Bienvenue à la Tour de Pisa! </br>Stefano et son équipe de gladiateur vous accuillerons dans ce restaurant d'ambiance greco-romaine et devenez combattant contre votre ennemi de toujours... la faim! Venez savourez nos pizzas qui réveilleront vos papilles avec vos amis ou en famille!</br>
Vous pourrez nous contacter et nous rendre visite à cette adresse: </br>
1 rue de Pise 01173 Toscane.</br>
Téléphone: 03.54.43.96.42 </br>

</p>
</div>

	<div id="box"> <h4>pizza du mois<h4> </div>

	<div id="book"><h4> livre d'or<h4>
<p> Laissez-nous vos commentaires <p> </div>


	<div id="command"> </div>
	
	<div id="photo"> </div>

	<div id="nom"> </div>

	<div id="ingredient"> </div>

	<div id="size"> </div>

	<div id="prix"> </div>

	<div id="command"> </div>


	<div id="phone"> </div>

	<div id="valid"> validez commande </div>

	<div id="cb"> <h4> Carte Bancaire </h4> </div>

	<div id="pay"> <h4> Paiement Paypal </h4> </div>

	<div id="lcommand"> <h5> Votre liste de commande </h5> </div>
	 

</body>


</html>
