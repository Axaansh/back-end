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
					<?php
					$link = mysqli_connect("localhost", "root", "", "european space agency");
						
					if($link === false) {
					die("Error : Could not connect");
					}
					?>
					<form method="post" action="addmission.php">

						<label for="mission_name">Mission Name</label>
						<input type="text" id="mission_name" name="mission_name" required>
						
							<br></br>
						
						<label for="mission_type">Mission Type</label>
						<input type="text" id="mission_type" name="mission_type" required>
						
							<br></br>
						
						<label for="destination">Destination</label>
						<input type="text" id="destination" name="destination" required>
						
							<br></br>
						
						<label for="crew_size">Crew Size</label>
						<input type="number" min="2" name="crew_size" required></input>
						
							<br></br>
						
						<label for="launch_date">Launch Date</label>
						<input type="date" id="launch_date" name="launch_date" required>
						
							<br></br>
							
						<label for="astronaout_id">Select Astronaout</label>
						<select name="astronaout_id">
							<?php
							$sql = mysqli_query($link, "SELECT astronaut_id, astronaut_name FROM astronaut");
							while ($row = $sql->fetch_assoc()){
							echo "<option value='{$row['astronaut_id']}'>{$row['astronaut_name']}</option>";
							}
							?>
						</select>

						
							<br></br>
							
						<label for="target_id">Select Target</label>
						<select name="target_id">
							<?php
							$sql = mysqli_query($link, "SELECT target_id, target_name FROM target");
							while ($row = $sql->fetch_assoc()){
							echo "<option value='{$row['target_id']}'>{$row['target_name']}</option>";
							}
							?>
						</select>
						
							<br></br>
						
						<input type="submit" value="Submit" name="sbmt">
						
						<?php
						if(isset($_POST['sbmt'])){
							
							$m_n = $_POST['mission_name'];
							$des = $_POST['destination'];
							$c_s = $_POST['crew_size'];
							$m_t = $_POST['mission_type'];
							$l_d = $_POST['launch_date'];
							$a_id = $_POST['astronaout_id'];	
							$t_id = $_POST['target_id'];	
							
							$sql = "INSERT INTO mission (mission_name, destination, crew_size, mission_type, launch_date, target_id, astronaut_id) VALUES ('$m_n', '$des', '$c_s', '$m_t', '$l_d', '$t_id', '$a_id')";	
							if (mysqli_query($link, $sql)){
							echo "Mission has been added";
							} else {
							echo "Error : Problem adding Mission";
							}
						}
						
						$link->close();
						?>
					</form>
				</div>
					
	
	<br></br>
		<hr></hr>
		<br></br>
		<center>     ☉     ☽     ☿     ♀     ⊕     ♁     ♂     ♃     ♄     ♅     ⛢     ♆     ⯓     ♇    </center>
		<br></br>
 </body>
</html>
