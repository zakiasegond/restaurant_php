<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Restaurant</title>
	</head>

	<body>

		<?php
			ini_set('display_errors', 1);

			require ('Menu.class.php');
			require ('Plat.class.php');	
			
	

			$stand = new Menu ("Standard", "Plateau de charcuterie ", "Gigot d'agneau" , "Haricots-pommes de terre" , "Tartelette au citron" , "20 min" , "19€");
			$veget= new Menu ("Végétarien ", "Salade de chêvre chaud", "steack de soja", "Carotte-brocolis" , "Mousse au chocolat" , "25 min" , "23€");
			// $enfant = new Menu ("Enfant", "Assiette de jambon", "Glace", "10 min", "9€");
		
			
	
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
    				
					echo '<tr><td>' . $value->menu .'<tr><td>' . $value->entrée . '</td><td>' . $value->plat1  . '</td><td>' . $value->plat2 . '</td><td>' . $value->dessert . '</td><td>' . $value->tempPrépa . '</td><td>' . $value->prix  . '</td></tr>';
				}	
			 	echo '</table>';
		

		?>
	
	</body>
</html>