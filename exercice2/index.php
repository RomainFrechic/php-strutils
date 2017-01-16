	<?php 

	class User {

		private $useVariable = 'name';

	public function answerUser($useVariable){
			foreach ($_POST as $value) {
				echo $value;
			}
		}
	}

	 $User = new User();
	 //echo $User -> answerUser();


	?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>PHP POO exercice 2</title>
	</head>
	<body>
		<form action="index.php" method="POST">
			<div>		
				<label for="name">Nom</label>
				<input type="text" value=" Charlie " name="name" id="name">
				<input type="text" value=" Chaplin " name="firstname" id="name">
			</div>
			<button>Envoyer</button>

			<h1><?php echo $User -> answerUser(); ?></h1>
		</form>
	</body>
	</html>