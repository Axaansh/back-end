<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="style.css" />
		<title>Document</title>
   
		<centre>
		<link rel="stylesheet" href="index.css">
			<nav class="navbar">
			<!-- LOGO -->
				<div class="logo"><img src="esalogo.jpg" width="50%" height="50%"></div>
	 
				<!-- NAVIGATION MENU -->
				<ul class="nav-links">
       
				<!-- NAVIGATION MENUS -->
					<div class="menu">
						<li><a href="index.php">Index</a></li>
						<li><a href="addastronaut.php">Add Astronaut</a></li>
						<li><a href="addtarget.php">Add Target</a></li>
						<li><a href="addmission.php">Add Mission</a></li>
						<li><a href="seeastronaut.php">See Astronaut</a></li>
						<li><a href="seetarget.php">See Target</a></li>
						<li><a href="seemission.php">See Mission</a></li>
					</div>
				</ul>
			</nav>
		</centre>
	</head>
 
	<body bgcolor="teal">
		<hr></hr>
		<br></br>
	
			<link rel="stylesheet" href="style.css">
				<div class="container">
	
					<form method="post" action="addtarget.php">

						<label for="target_name">Target Name</label>
						<input type="text" id="target_name" name="target_name" required>
						
							<br></br>
						
						<label for="target_type">Target Type</label>
						<input type="text" id="target_type" name="target_type" required>
						
						
							<br></br>
						
						<label for="no_of_missions">No of Missions</label>
						<input type="number" min="0" name="no_of_mission" required></input>
						
							<br></br>
						
						<label>First Mission</label>
						<input type="date" name="first_mission" required>
						
							<br></br>
						
						<input type="submit" value="Submit" name="sbmt" required>
				
						<?php
						
						$t_n = $_POST['target_name'];
						$t_t = $_POST['target_type'];
						$nom = $_POST['no_of_mission'];
						$f_m = $_POST['first_mission'];						
						
						$host = "localhost";
						$username = "root";
						$password = "";
						$database_name = "european space agency";
						
						$link = mysqli_connect($host, $username, $password, $database_name);
						
						if($link === false) {
							die("Error : Could not connect");
						}
						
						if(isset($_POST['sbmt']))
						{
							
						$sql2 = "INSERT INTO target (target_name, target_type, no_of_mission, first_mission) VALUES ('$t_n', '$t_t', '$nom', '$f_m')";	
						
							if(mysqli_query($link, $sql2)) 
							{
								echo "Target has been added";
								
							} else {
								echo "Error : Problem adding Target";
							}
						}
						
						mysqli_close($link);
						?>
				
				</div>
	  </form>
	
	<br></br>
		<hr></hr>
		<br></br>
		<center>     ☉     ☽     ☿     ♀     ⊕     ♁     ♂     ♃     ♄     ♅     ⛢     ♆     ⯓     ♇    </center>
		<br></br>
 </body>
</html>
