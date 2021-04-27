<!DOCTYPE html>
<html>
<head>
<title>Rutes</title>
<style>
body {
   background-image: url('1.jpg');
   background-repeat: no-repeat;
   background-attachment: fixed;
   background-size: cover;
}

div {
	  color: white;
	  text-align: center;
}

h1 {
	font-family: verdana;
    color: yellow;
	text-align: center;
}
body {
	display: flex;
	justify-content: right;
	align-items: center;
	height: 100vh;
	flex-direction: column;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

table {
	width: 500px;
	border: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
}

td{color:grey;
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

      <h1>Auto-Bus - rute autobuze</h1>
<?php	
$link = mysqli_connect('localhost', 'root', '', 'rute');
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//Se preiau produsele din baza de date
 if ($result = $link->query("SELECT * FROM rute ORDER BY oras_plecare")){ 
	// Afisare inregistrari pe ecran
	if ($result->num_rows > 0)
	{
	 ?>
		
		<table border="2" cellspacing="2" cellpadding="3">
		<tr style="color:maroon"><th>Oras Plecare</th><th>Oras Sosire</th><th>Ora plecare</th><th>Ora sosire</th><th>Durata traseu</th><th>Pret (lei)</th></tr>
		<?PHP
		while ($row = $result->fetch_object())
		{
			//Definirea unei noi linii pentru fiecare inregistrare
			echo "<tr>";
			echo "<td>" . $row->oras_plecare . "</td>";
			echo "<td>" . $row->oras_sosire. "</td>";
			echo "<td>" . $row->ora_plecare . "</td>";
			echo "<td>" . $row->ora_sosire . "</td>";
			echo "<td>" . $row->durata . "</td>";
			echo "<td>" . $row->pret . "</td>";
			echo "</tr>";
		}

		echo "</table>";
	}
 
	//Daca tabelul nu contine inregistrari afisam o eroare
	else{
		echo "<span class='nuinreg'>Nu sunt inregistrari in tabelul produse!</span>";
	}
 }
 
	// eroare in caz de insucces in interogare
	else{
		echo "Error: " . $link->error(); 
	}

			$link->close();
	?>  
	
	
	
				
</body>
</html>