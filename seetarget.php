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
					<th width="100px">Target ID<br><hr></th>
					<th width="250px">Target Name<br><hr></th>
					<th width="250px">Target Type<br><hr></th>
					<th width="100px">No of Mission<br><hr></th>
					<th width="150px">First Mission<br><hr></th>
				</tr>
					
				<?php
				$sql = mysqli_query($link, "SELECT target_id, target_name, target_type, no_of_mission, first_mission FROM target");
				while ($row = $sql->fetch_assoc()){
				echo "
				<tr>
					<th>{$row['target_id']}</th>
					<th>{$row['target_name']}</th>
					<th>{$row['target_type']}</th>
					<th>{$row['no_of_mission']}</th>
					<th>{$row['first_mission']}</th>
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
