<!DOCTYPE html>



	<html>


			<head>


	<title></title>



			</head>


			<body>

<?php 


function bonjour() {
 
echo "bonjour à tous <br> " ; 

}

bonjour() ; 

// -------------------------- //

function salut($preenom) {

echo "bonjour " . $preenom . " tu vas bien ? <br> " ; 

}

salut('Fred') ; 

//--------------------------//


function agee($agee) {


	echo " tu as " . $agee . " ans <br> " ;
}

agee(25) ; 


// ----------EXO 3-------------- //

function Chaine1(){ 
return "Salut tout le monde " ; 
}

function Chaine2(){
	return"Vous allez bien ? <br> " ;
}

$var1 = Chaine1();
$var2 = Chaine2();  

echo $var1, $var2  ; 

// ---------EXO 4------------- // 


function Nombre($chiffre1, $chiffre2){

if ($chiffre1 > $chiffre2 ) {
	return " Le premier nombre est plus grand <br> " ; 
}

elseif ($chiffre1 < $chiffre2 ) {
	return " Le premier nombre est plus petit <br>" ;
}

else  {
	return " les deux nombres sont identique <br>"  ; 
}


}


echo Nombre(18, 20) ; 



// -------------EXO 5--------------- // 

function NomAge ($prenom, $age){

	echo " Salut " . $prenom . " tu as " . $age . " ans  <br> "  ;
 }

NomAge ('Fred', 23) ; 

//--------------- EXO 6 -------------- //


function NomPrenomAge ($prenom, $nom, $age) {

	echo 'Salut ' . $nom  ,  $prenom . " tu as " . $age . "ans <br> " ;

}

NomPrenomAge ('Frederic', 'Durand', 26) ; 

//----------------- EXO 7 ---------------//

function Dif($age1, $genre) {


	if ($age1 >= 18 AND $genre == "homme") {

	return "Vous êtes un homme et vous êtes majeur <br>" ; 
					}


	elseif ($age1 < 18 AND $genre == "homme") {

	return "Vous êtes un homme et vous êtes mineur <br>" ;
					}


	elseif ($age1 >= 18 AND  $genre == "femme") {

	return "Vous êtes une femme et vous êtes majeur <br>" ; 

					}


	else  {

	return "Vous êtes une femme et vous êtes mineur <br>" ; 
					}

							}

echo Dif(18, "femme") ; 

// ---------------- EXO 8 --------------- //



function Calcul($nombre1, $nombre2, $nombre3) {

	return $nombre1 + $nombre2 + $nombre3 ;

}

echo Calcul(10, 15, 10) ;




 //Exemple de fonction

// - strlen - qui permet de calculer le nombre de lettre
// - str_shuffle - qui permet de mélanger au hasard les lettres
// - date - permet de davoir l'heure, le mois, le jour ... 
// - str_word_count - compte le lettre de mot 



?>




			</body>



	</html>