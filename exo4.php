<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 


$mois[0] ="Janvier" ;
$mois[1] = "Fevrier" ;
$mois[2] = "Mars" ;
$mois[3] = "Avril" ;
$mois[4] = "Mai" ;
$mois[5] = "Juin" ;
$mois[6] = "Juillet" ;
$mois[7] = "Août" ;
$mois[8] = "Septembre" ;
$mois[9] = "Octobre" ;
$mois[10] = "Novembre" ;
$mois[11] = "Decembre" ;


// On peut afficher une seul valeur avec simplement //  
				// echo $mois[X] //


for ($num = 0 ; $num < 12 ; $num++) 

 				{

echo '<p>' . $mois[$num] . '</p>' ; 

				}


				//------On peut également l'écrire de cette façon---------- // 

//$mois array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre')

//echo $mois[8] ; 


?>




<?php

	// ---------- Pour faire des associations avec un tableau associatif--------- // 
			// /!\ Ne pas faire d'espace dans les valeurs /!\ // 


$hautdefrance = array('Asine' => 05 , 'Nord' => 59 ,  'Oise' => 60 , 'Pas_de_calais' => 62 , 'Somme' => 80, 'Marne' => 51 ) ; 



foreach ($hautdefrance as $nom => $liste)

	// le => permet d'afficher les deux valeurs // 



			{


	echo '<p>le département au numéros  ' . $liste . ' a pour nom ' . $nom . '  <p>' ; 


			}


?>

</body>
</html>