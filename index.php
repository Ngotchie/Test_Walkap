<html>
  <head>
    <meta charset="utf-8">
    <title>Sign Up For Beta Form</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <form action="#" method="post" name="Test">
      <div class="header">
         <p>Teste sur un mombre</p>
      </div>
      <div class="description">
        <p>Saisir un nombre compris entre 1 et 20</p>
      </div>
      <div class="input">
        <input type="number" min="0" max="20" class="button" id="nombre" name="nombre" placeholder="Saisir le nombre ici" required>
        <input name="submit" type="submit" class="button" id="submit" value="VALIDER">
      </div>
    </form>
	
	<div class="resultat">
        <p>
		  <?php
		  if (isset($_POST['submit'])) {
			$nombre = $_POST['nombre'];
			$test1 = 0;
			$test2 = 0;
			if ($nombre % 3 == 0) $test1 = 1;
			if ($nombre % 5 == 0) $test2 = 2;
			
			$rslt = $test1 + $test2;
			
			switch ($rslt) {
			  case 1:
                echo "<h2 style='color:green; margin-left: 47%; width:5px; height:5px;  font-family: Delicious Adventures;'>Wal</h2>"; 
				break;
			  case 2:
				echo "<h2 style='color:green; margin-left: 47%; width:5px; height:5px;  font-family: Delicious Adventures;'>kap</h2>";
				break;
			  case 3:
				echo "<h2 style='color:green; margin-left: 47%; width:5px; height:5px;  font-family: Delicious Adventures;'>Walkap</h2>";
				break;
			  default:
				echo "<h2 style='color:green; margin-left: 47%; width:5px; height:5px;  font-family: Delicious Adventures;'>".$nombre."</h2>";
			}
		  }
		?>
		</p>
    </div>
	
  </body>
</html>

