<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>PIZZA ONLINE</title>
		<link rel="shortcut icon" href="icon.png" type="png">
		<link rel="stylesheet" href=""/>
		<script></script>
	</head>
	<body>
		<table align="center">
			<tr>
				<td>
					<form action="" method="post">
						<fieldset>
							<legend align="center">LOGIN</legend><br/>
							<table>
								<tr>
									<td>
										<label for="email">Email</label>
										<input type="text" id="email" name="adresa">
									</td>
									<td>
										<label for="pass1">Password</label>
										<input type="password" id="pass1" name="lozinka"/>
									</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>
										<a href="">forgot my password</a>
									</td>
									<td>
										<input type="checkbox" id="h1"/>
										<label for="h1">Keep me signed in</label>
									</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td>
								<tr>
									<td colspan="2" align="center">
										<button><a href="login.html">LOGIN</a></button>
									</td>
								</tr>
								<tr>
									<td></td>
								</tr>
								<tr>
									<td colspan="2" align="center">
										<button>new member?<br/><b><a href="signup.html">SIGN UP NOW</a></b></button>
									</td>
								</tr>
							</table>
						</fieldset>
					</form>
				</td>
			</tr>
		</table>
		<?php
			echo "Zdravo " .$_POST["adresa"];
			echo "<br>";

			$adresa = "ivana.korovesovska@gmail.com";

			if ($adresa == "ivana.korovesovska@gmail.com") {
				echo "Zdravo Ivana";
			} 
			else {
				echo "Ej, ti ne si Ivana";
			}
		?>
	</body>
</html>