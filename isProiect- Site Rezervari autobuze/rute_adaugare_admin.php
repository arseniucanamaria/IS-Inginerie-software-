

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
<body>
 
     
    <div class="tab">
	 <button class="tablinks" onclick="location.href='principal.php'">Acasa</button>
  <button class="tablinks" onclick="location.href='despre.php'">Despre noi</button>
  <button class="tablinks" onclick="location.href='login.php'">Login</button>
  <button class="tablinks" onclick="location.href='register.php'">Register</button>
  <button class="tablinks" onclick="location.href='angajari.php'">Angajari</button>
  <button class="tablinks" onclick="location.href='rute.php'">Rute</button>
      <button class="tablinks" onclick="location.href='contact.php'">Contact</button>
	     <button class="tablinks" onclick="location.href='anunturi.php'">Anunturi</button>
  <button class="tablinks" onclick="location.href='harti.php'">Harti</button>
</div><br><br>

      <h1>Auto-Bus - adaugare rute noi</h1><br><br>
	  
	  <form  action = "rute_adaugare.php" method="post">
    <p>
        <label for="oras_plecare">oras_plecare:</label>
        <input type="text" name="oras_plecare" id="oras_plecare">
    </p>
    <p>
        <label for="oras_sosire">oras_sosire:</label>
        <input type="text" name="oras_sosire" id="oras_sosire">
    </p>
    <p>
        <label for="ora_plecare">ora_plecare:</label>
        <input type="text" name="ora_plecare" id="ora_plecare">
    </p>
	<p>
        <label for="ora_sosire">ora_sosire:</label>
        <input type="text" name="ora_sosire" id="ora_sosire">
    </p>
    <p>
        <label for="durata">durata:</label>
        <input type="text" name="durata" id="durata">
    </p>
    <p>
        <label for="pret">pret:</label>
        <input type="text" name="pret" id="pret">
    </p>

	<input type = "submit" name = "submit"  value= "Adauga">

</form>
	
				
</body>
</html>