<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

/*body {
  font-family: Arial;
  margin: 0;
  background-color: #92a8d1;
}*/

body {
   background-image: url('ticket.jpg');
   background-repeat: no-repeat;
   background-attachment: fixed;
   background-size: cover;
}
body {
	display: flex;
	justify-content: right;
	align-items: center;
	height: 100vh;
	flex-direction: column;
}

* {
  box-sizing: border-box;
}



/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}
.centered {
  position: fixed;
  top: 50%;
  left: 50%;
  margin-top: -50px;
  margin-left: -100px;
  background-color: lightgrey;
  width: 300px;
  border: 15px solid blue;


}
/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

button {
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
}
button:hover{
	opacity: .7;
}

.tab {
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  position: fixed;
  top: 0;
  right: 0;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
   font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;

h1 {
	text-align: center;
	color: #fff;
}

</style>
<body>

<div class="tab">
<button class="tablinks" onclick="location.href='principal.php'">Acasa</button>
<button class="tablinks" onclick="location.href='despre.php'">Despre noi</button>
<button class="tablinks" onclick="location.href='login.php'">Login</button>
<button class="tablinks" onclick="location.href='loginAdmin.php'">Login As Admin</button>
<button class="tablinks" onclick="location.href='register.php'">Register</button>
<button class="tablinks" onclick="location.href='angajari.php'">Angajari</button>
<button class="tablinks" onclick="location.href='rute.php'">Rute</button>
<button class="tablinks" onclick="location.href='rezervareBilet.php'">Rezervare bilet</button>
<button class="tablinks" onclick="location.href='contact.php'">Contact</button>
<button class="tablinks" onclick="location.href='anunturi1.php'">Anunturi</button>
<button class="tablinks" onclick="location.href='harti.php'">Harti</button>
</div><br><br>

<h1 style="text-align:center">Rezervare bilet</h1>
   

<body>
     <div id="content">  
			  <div id="logo" style="left: 600px; height: auto; top: 15px; width: 260px; position: relative; z-index:4;">
				
					<div class="centered" style="margin-bottom: 15px;">
						<form action="selectset.php" method="post" style="margin-bottom:none;">
						<span style="margin-right: 11px;">Selectati Ruta: 
						<select name="route" style="width: 191px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;"/>
						<?php
						include('db.php');
						$result = mysqli_query($conn,"SELECT * FROM route");
						while($row = mysqli_fetch_array($result))
							{
								echo '<option value="'.$row['id'].'">';
								echo $row['route'].'  :'.$row['type'].'  :'.date("h:i A",strtotime("2020-01-01 ".$row['time']));
								echo '</option>';
							}
						?>
						</select>
						</span><br><br>
						<span style="margin-right: 11px;">Data:<br>
						<input type="date" id="data" name="data">
						</span><br><br>
						<span style="margin-right: 11px;">Nr. Pasageri:  
						<select name="qty" style="width: 191px; margin-left: 15px; border: 3px double #CCCCCC; padding:5px 10px;">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						</select>
						</span><br><br>
						<input type="submit" id="submit" value="Next" style="height: 34px; margin-left: 15px; width: 191px; padding: 5px; border: 3px double rgb(204, 204, 204);" />
						</form>
					</div>
					
					
				</div>
        </div>
		
</body>
</html>
