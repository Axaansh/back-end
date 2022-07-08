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
			  <form id="addastronauts" method="post" action="addastronaut.php" enctype="multipart/form-data">
			  
				<label for="astronaut_name">Astronaut Name</label>
				<input type="text" id="astronaut_name" name="astronaut_name" required>
				
					<br></br>
				
				<label for="subject">Missions</label>
				<input id="missions" type="number" min="2" name="missions"></input>
				
					<br></br>
					
				<input type="submit" value="Submit" name="sbmt">
				
						<?php                            
						
						$a_name = $_POST['astronaut_name'];
						$missions = $_POST['missions'];
						
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
							
						$sql1 = "INSERT INTO astronaut (astronaut_name,no_of_mission) VALUES ('$a_name','$missions')";	
						
							if(mysqli_query($link, $sql1)) 
							{
								echo "Astronaut has been added";
								
							} else {
								echo "Error : Problem adding astronaut";
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
