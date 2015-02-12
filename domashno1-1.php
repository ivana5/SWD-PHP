<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>PIZZA ONLINE</title>
		<link rel="shortcut icon" href="icon.png" type="png">
		<link rel="stylesheet" href=""/>
		<scrypt></scrypt>
	</head>
	<body>
		<table align="center">
			<tr>
				<td>
					<form action="" method="post">
						<fieldset>
							<legend align="center">SIGN UP</legend><br/>
							<table>
								<tr>
									<td align="right">
										<label for="name">Name</label>
									</td>
									
									<td align="left">	
										<input type="text" id="name" name="ime">
									</td>
								</tr>
								<tr>
									<td align="right">
										<label for="lastname">Last name</label>
									</td>
									
									<td align="left">	
										<input type="text" id="lastname" name="prezime">
									</td>
								</tr>
								<tr>
									<td align="right">
										<label for="email">Email</label>
									</td>
									
									<td align="left">	
										<input type="text" id="email" name="mejl">
									</td>
								</tr>
								<tr>
									<td align="right">
										<label for="pass1">Password</label>
									</td>
									
									<td align="left">	
										<input type="password" id="pass1">
									</td>
								</tr>
								<tr>
									<td align="right">
										<label for="pass2">Retype password</label>
									</td>
									
									<td align="left">	
										<input type="password" id="pass2">
									</td>
								</tr>
								<tr>
									<td align="right">
										<label for="streetname">Street Name</label>
									</td>
									
									<td align="left">	
										<input type="text" id="streetname" name="ulica">
									</td>
								</tr>
								<tr>
									<td align="right">
										<label for="streetnumber">Street Number</label>
									</td>
									
									<td align="left">	
										<input type="text" id="streetnumber" name="ulica_broj">
									</td>
								</tr>
								<tr>
									<td align="right">
										<label for="apartment">Apartment</label>
									</td>
									
									<td align="left">	
										<input type="text" id="apartment" name="stan">
									</td>
								</tr>
								<tr>
									<td align="right">
										<label for="telephone">Telephone</label>
									</td>
									
									<td align="left">	
										<input type="text" id="telephone" name="telefon">
									</td>
								</tr>
								<tr>
									<td colspan="2" align="center"><button><b><a href="whereto.html">SUBMIT</a></b></button></td>
								</tr>	
							</table>
						</fieldset>
					</form>
				</td>
			</tr>
		</table>
		<?php
			echo "Zdravo " .$_POST["ime"];
			echo "<br>";

				$ime = "Ivana";

			echo "so prezime " .$_POST["prezime"];
			echo "<br>";

				$prezime = "Korovesovska";

			echo "kje te kontaktirame na " .$_POST["mejl"];
			echo "<br>";

				$mejl = "ivana.korovesovska@gmail.com";

			echo "ziveesh na " .$_POST["ulica"];
			echo "<br>";
				$ulica = "bulevar Vidoe Smilevski Bato";

			echo "so broj " .$_POST["ulica_broj"];
			echo "<br>";
				
				$ulica_broj = "55";

			echo "vo stan broj " .$_POST["stan"];
			echo "<br>";
				
				$stan = "15";

			echo "telefonot ti e " .$_POST["telefon"];
			echo "<br>";

				$telefon = "070973064";
		?>
	</body>
</html>