<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8">
		<title><?php echo "c3";?></title>
	</head>
	<body>
		<form action="c3.php" method="post">
			Username: <br>
			<input type="text" name="username"/> <br>

			Password: <br>
			<input type="password" name="password" /> <br>

			Gender: <br>
			<label for="gm">
				Male
				<input type="radio" name="gender" value="male" id="gm"/>
			</label> <br>
			<label for="gf"> <br>
				Female
				<input type="radio" name="gender" value="female" id="gf"/>
			</label> <br>	
			<label for="go"> <br>
				Other
			<input type="radio" name="gender" value="other" id="go"/>
			</label> <br>

			Age: <br>
			<input type="number" min="1" name="age" /> <br>

			Hair color:
			<input type="color" name="hair"/> <br>

			Date of birth: <br>
			<input type="date" name="birthday"/> <br>

			Foods I like: <br>
			<label for="f1">
				Pizza
				<input type="checkbox" name="food[]" value="pizza" id="f1">
			</label> <br>

			<label for="f2">
				Barbeque
				<input type="checkbox" name="food[]" value="barbeque" id="f2">
			</label> <br>

			<label for="f3">
				Burek
				<input type="checkbox" name="food[]" value="burek" id="f3">
			</label> <br>

			<label for="f4">
				Spaghetti
				<input type="checkbox" name="food[]" value="shpagetti" id="f4">
			</label> <br>

			<label for="f5">
				Salad
				<input type="checkbox" name="food[]" value="salad" id="f5">
			</label> <br>

			<label for="f6">
				More salad
				<input type="checkbox" name="food[]" value="more_salad" id="f6">
			</label> <br>

			Country: <br>
			<select name="country">
				<option value="mk">Macedonia</option>
				<option value="sk">Slovakia</option>
				<option value="se">Sweeden</option>
				<option value="de">Germany</option>
				<option value="gb">Great Britain</option>
				<option value="bo">Bolivia</option>
				<option value="it">Italy</option>
				<option value="fr">France</option>
				<option value="ir">Ireland</option>
			</select> <br>
			<button type="submit">Submit</button>				
		</form>
		<?php
			print_r($_POST);

			echo "" .$_POST["username"];
			echo "<br>";

			echo "" .$_POST["password"];
			echo "<br>";

			echo "" .$_POST["gender"];
			echo "<br>";

			echo "" .$_POST["age"];
			echo "<br>";

			echo "" .$_POST["hair"];
			echo "<br>";

			echo "" .$_POST["birthday"];
			echo "<br>";

			// echo "" .$_POST["food[]"];
			print_r($_POST['food']);
			echo "<br>";

			echo "" .$_POST["country"];
			echo "<br>";
		?>
		<hr>
		<?=$_POST ['username'];?>
		<br>
		<?=$_POST ['password'];?>
		<br>
		<?=$_POST ['gender'];?>
		<br>
		<?=$_POST ['age'];?>
		<br>
		<?=$_POST ['hair'];?>
		<br>
		<?=$_POST ['birthday'];?>
		<br>
		<?php print_r($_POST['food']);?>
		<br>
		<?=$_POST ['country'];?>
		<br>

	</body>
</html>