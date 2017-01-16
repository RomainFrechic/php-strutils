	<?php 

	class User {

		private $useVariable = name;

		public function answerUser($useVariable){
			foreach ($_POST as $value) {
				echo $value;
			}
		}


		public function cache(){
		
				$file = $_FILES['nomfichier'];
				$extention = substr($file['name'],-3);
				
				if($extention === 'pdf'){
					echo 'Bravo ! le fichier '.$extention.' à été télécharger';
				}else{
					echo 'ERREUR EXTENSION FICHIER IS NOT PDF';
				}
			}
		}

		$User = new User();
		//echo $User -> answerUser();
		//echo $User -> cache();

		?>

		<form enctype="multipart/form-data" action="index.php" method="POST" class="formulaire">

			<label for="name">Nom</label>
			<select name="Genre">
				<option value="Mr ">Mr</option>
				<option value="Mme ">Mme</option></select>
				<input type="text" value="John " name="name" id="name">	
				<input type="text" value="Lennon " name="prenom" id="prenom"></br>
				<input type="file" name="nomfichier" /></br>
				<button type="submit">Envoyer</button>
			</form>
        <h1><?php echo $User -> answerUser(); ?></h1>
        <h1><?php echo $User -> cache(); ?></h1>

