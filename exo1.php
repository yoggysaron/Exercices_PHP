<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">

	<title></title>
</head>
<body>

<p> HTML <p>

<?php 

	$a = 0 ;

	while ( $a <= 20) {

	echo '<p> <span> Pas encore '.$a.'  boucle </span> </p>' ;

	$a = $a + 1 ; 

						}


	while ($a <= 40 ) {

	echo '<p> <span> Bientot '.$a.' boucle </span> </p>' ;

	$a = $a + 1 ; 


						}

	while ($a <= 80 ) {

		echo '<p> <span> '.$a.' boucle, bientot la fin ! </span> </p>' ;

		$a++ ;
						}

	while ($a <= 99) {

		echo '<p> <span> ' .$a. ' boucle, attention ! </span> </p>' ;
		$a++ ;
	}


	while ($a == 100) {

		echo '<p> <span> ' .$a. ' TERMINER ! </span> </p>' ; 
		$a++ ;
	}




		// On peux utiliser $ = $ + 1 ; ou bien $++ ; pour arriver au même résultat //

		// On peux également incérer la $ dans le texte pour qu'il fasse apparaitre le décompte de cettte façon " texte" . $ . "texte" ; // 

		// On peux également utiliser for ($ = X ; $ <= X ; $++ ou $ = $ + X par exemple, cela permet de rentrée toute les conditions dans un endroit // 


?>

<style type="text/css">
	
span {


border: solid black ; 
background-color: grey ;

	
}

</style>


</body>
</html>