<!DOCTYPE html>
<html>
<head>

	<script language="javascript"> function liste(form5) { 
alert("L\'élément " + (form5.list.selectedIndex + 1)); }
</SCRIPT> 

</head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="pizzas.css">
<body>

<!-- php script -->

<table>
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
              
                <td>L <br><br>$l</td>
                <td>XL <br><br>$xl</td>
                <td>XXL <br><br>$xxl</td>
                
                </tr>
                ";


    }





?>
</tbody>
</table>


<!-- php script -->


</body>


</html>
