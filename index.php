<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


Exo 1 

<a href="index.php?nom=Nemare&prenom=Jean" > index.php?nom=Nemare&prenom=Jean </a>

<p> <?php

echo $_GET['nom']  ; 
echo $_GET ['prenom']  ; 


?> </p>

Exo 2 

<a href ="index.php?nom=Nemare&prenom=Jean" > index.php?nom=Nemare&prenom=Jean </a>

<p> <?php

if (isset($_GET['nom']) AND isset($_GET['prenom']) AND isset($_GET['age'])) 

 		{

echo 'Salut' . $_GET['nom'] . ' ' . $_GET['prenom'] . ' ' . $_GET['age'] . ' !' ; 

		}

else 
		{

	echo 'Veillez renseignez un nom, prenom et age !' ; 
		}



?> </p>

Exo 3 

<a href ="index.php?dateDebut=2/05/2016&dateFin=27/11/2016" > index.php?dateDebut=2/05/2016&dateFin=27/11/2016 </a>

<p> <?php 

echo $_GET['dateDebut']  ; 
echo $_GET ['dateFin']  ; 


?> </p>


Exo 4 

<a href ="index.php?langage=PHP&serveur=LAMP" > index.php?langage=PHP&serveur=LAMP </a>

<p> <?php 

echo $_GET['langage']  ; 
echo $_GET ['serveur']  ; 


?> </p>

Exo 5 

<a href="index.php?semaine=12" > index.php?semaine=12 </a>

<p> <?php 

echo $_GET['semaine']  ; 


?> </p>

Exo 6 

<a href="index.php?batiment=12&salle=101" > index.php?batiment=12&salle=101 </a>

<p> <?php 

echo $_GET['batiment']  ; 
echo $_GET['salle'] ; 


?> </p>


</body>
</html>