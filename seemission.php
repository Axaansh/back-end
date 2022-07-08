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
	
		<?php
		
		$link = mysqli_connect("localhost", "root", "", "european space agency");
						
		if ($link === false) {
			die("Connection failed: ");
		}
		?>
	
	<hr>
		<center>
			<table>
		
				<tr>
					<th width="100px">Mission ID<br><hr></th>
					<th width="150px">Mmission Name<br><hr></th>
					<th width="250px">Mission Type<br><hr></th>
					<th width="250px">Target ID<br><hr></th>
					<th width="100px">Astronaut ID<br><hr></th>
					<th width="250px">Destination<br><hr></th>
					<th width="100px">Crew Size<br><hr></th>
					<th width="150px">Launch Date<br><hr></th>
				</tr>
					
				<?php
				$sql = mysqli_query($link, "SELECT mission_id , mission_name, mission_type, target_id , astronaut_id , destination, crew_size, launch_date  FROM mission");
				while ($row = $sql->fetch_assoc()){
				echo "
				<tr>
					<th>{$row['mission_id']}</th>
					<th>{$row['mission_name']}</th>
					<th>{$row['mission_type']}</th>
					<th>{$row['target_id']}</th>
					<th>{$row['astronaut_id']}</th>
					<th>{$row['destination']}</th>
					<th>{$row['crew_size']}</th>
					<th>{$row['launch_date']}</th>
				</tr>";
				}
				?>
				
			</table>
		</center>
		<?php
		$link->close();
		?>
	
		</hr>
	
	<br></br>
		<hr></hr>
		<br></br>
		<center>     ☉     ☽     ☿     ♀     ⊕     ♁     ♂     ♃     ♄     ♅     ⛢     ♆     ⯓     ♇    </center>
		<br></br>
 </body>
</html>
