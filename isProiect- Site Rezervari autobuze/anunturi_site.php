<html>
<head>
<style>
.wrapper{
    background:red;
    overflow:auto;
}
.myDiv {
  height: 300px;
  width: 40%;
  border: 5px outset red;
  background-color: lightblue;    
  text-align: left;
  float: left;
}
.myDiv1 {
  height: 300px;
  width: 40%;
  border: 5px outset red;
  background-color: lightblue;    
  text-align: left;
  float: right;
}

.myDiv2 {
  height: 300px;
  width: 40%;
  border: 5px outset red;
  background-color: lightblue;    
  text-align: left;
  float: right;
}

.myDiv3 {
  height: 305px;
  width: 40%;
  border: 5px outset red;
  background-color: lightblue;    
  text-align: left;
  float: left;
}

body {
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

form {
	width: 500px;
	border: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
}

h2 {
	text-align: center;
	margin-bottom: 40px;
}

input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label {
	color: #888;
	font-size: 18px;
	padding: 10px;
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
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

h1 {
	text-align: center;
	color: #fff;
}

a {
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
	text-decoration: none;
}
a:hover{
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
  
</style>
</head>
<body background="whitee.jpg">
     
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




<br>
<?php
$username = "root"; 
$password = ""; 
$database = "anunt"; 
$mysqli = mysqli_connect("localhost", $username, $password, $database) or die ("Nu gasesc baza de date");
$result =  "SELECT * FROM anunt";
$rezultat = mysqli_query($mysqli, $result);

if (isset($_POST['cautare'])) {
 
    while($row = mysqli_fetch_assoc($rezultat)) {
        
		?>
		<tr><b><td><center><font size = 10 color = "Red " >
		<span style="background-color:#D1CF98; color:black; font-family:tahoma; padding: 3px; font-weight:bold; letter-spacing:10px; font-size:20px;">
		<?php
		echo  $row["titlu"];
		?></font></b>
		<td><center><font size = 4><br>

		
		<?php
		echo  $row["mesaj"] ;
		?></font>
		<td><center><font size = 3></span>
		<?php
		
	}

} else {
    echo " ";
}


?>	
</td></tr></table><br><br>

<center><form action="" method="post" >
<input type="submit" name="cautare" value="AFISEAZA anunturi"></form></center>

</body>
</html>