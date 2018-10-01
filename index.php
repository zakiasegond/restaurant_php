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
			<!-- require ('boissons.class.php');
			require ('clients.class.php');
			require ('commandes.class.php');
			 -->
	

			$nap = new Pizza ("Pizza Napolitaine ", "9€" , " moyenne");
			$roy = new Pizza ("Royale ", "10€", "grande");
			$ori = new Pizza ("0rientale", "9€", "petite");
			$3f = new Pizza ("3 Fromage", "8€", "moyenne");
			
	
			$carte = [$nap,$roy,$ori,$3f];

			echo '<h3>Carte des Pizza :</h3><br />';
			echo '<table>
					<thead>
						<th>Nom</th>
						<th>Prix</th>
						<th>Taille</th>
					</thead>';


				foreach ($carte as  $key => $value) 
				{
    
					echo '<tr><td>' . $value->nom . '</td><td>' . $value->prix  . '</td><td>' . $value->taille  . '</td></tr>';
				}	
			 	echo '</table>';
		

		?>
	
	</body>
</html>