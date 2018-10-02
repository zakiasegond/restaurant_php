<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Restaurant</title>
		<link href="bootstrap.min.css" rel="stylesheet">
		<!-- <link rel=Stylesheet type="text/css" href=style.css> -->
	</head>

	<body>

		<?php
			ini_set('display_errors', 1);

			require ('Menu.class.php');
			require ('MenuStandard.class.php');
			require ('MenuVegetarien.class.php');
			require ('MenuEnfant.class.php');
			require ('Plat.class.php');	
			require ('Entree.class.php');
			require ('Viande.class.php');
			require ('Poisson.class.php');
			require ('Legume.class.php');
			require ('Dessert.class.php');



			$pdo = new PDO('mysql:host=localhost;dbname=restaurant', 'segond', 'loudmila32');
			try
			{
    			$bdd = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'segond', 'loudmila32');
			}

			catch (Exception $e)
			{
        		die('Erreur : ' . $e->getMessage());
			}

			// $req = $bdd->query('SELECT id, region, ville, combien, DATE_FORMAT(date, \'%d/%m/%Y \') AS date FROM 
			// localisation ORDER BY date DESC LIMIT 0, 9');
			
			
	

			$stand = new Menu ("Standard", "Plateau de charcuterie ", "Gigot d'agneau" , "Haricots-pommes de terre" , "Tartelette au citron" , "20 min" , "19€");
			$veget= new Menu ("Végétarien ", "" , "Salade de chèvre chaud", "",  "steack de soja", "Carotte-brocolis" , "Mousse au chocolat" , "25 min" , "23€");
			// $enfant = new Menu ("Enfant", "Assiette de jambon", "Glace", "10 min", "9€");
		
			// $standard = new MenuStandard();
			// $feunnec = new Feunnec(1);
			// $grenousse = new Grenousse(2);
			// $standard->getParams();
			// $feunnec->getParams();
			// $grenousse->getParams();
	
			$carte = [$stand, $veget];

			echo '<h3>Carte des Menus :</h3><br />';
			echo '<table>
					<thead>
						<th>Menu</th>
						<th>Entrée</th>
						<th>Plat1</th>
						<th>Plat2</th>
						<th>Dessert</th>
						<th>TempPrépa</th>
						<th>Prix</th>
					</thead>';


				foreach ($carte as  $key => $value) 
				{
    				
		
					echo '<tr><td>' . $value->menu .'<tr><td>' . $value->entrée . '</td><td>' . $value->plat1  . '</td><td>' . $value->plat2 . '</td><td>' . $value->dessert . '</td><td>' . $value->tempPrépa .'</td><td>' .  $value->prix . '</td></tr>';
				}	

			 	echo '</table>';
		?>
	
	</body>
</html>