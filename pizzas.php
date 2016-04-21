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
<input type='number' size='2' id='nb' name='number' value='0' />
</SELECT> 
<INPUT TYPE='button'NAME='b' VALUE='OK' onClick='liste(form5), number(nb)'> </FORM>




                </tr>";


    }





?>
</tbody>
</table>


<!-- php script -->


</body>


</html>
