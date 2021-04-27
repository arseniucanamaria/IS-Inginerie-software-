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
</div><br><br><br><br><br>

<center><b><i><u><font size="8" color = "Red " > Alatura-te echipei noastre...</font></u></i></b></center>
 <br>
 <br>
 <br><br><br>
<font size="4" align=center>
 <b>  Vrei să ai posibilitatea să lucrezi în cadrul unui colectiv dinamic, într-una dintre companiile cele mai stabile şi de succes de pe piaţa românească din domeniul transportului de călători? S.C. AUTO-BUS Prestări Servicii SRL angajează urgent:</b>
 <br><br><br>

<div class="wrapper" >
  <div class="myDiv" ><h2> Mecanic auto</h2>
  <ul type = "square"><li>studii medii (liceale sau profesionale de specialitate);</li></ul>
   <ul type = "square"><li>caracter serios, punctualitate;</li></ul>
   <ul type = "square"><li>experienţă în domeniu;</li></ul>
   <ul type = "square"><li>domiciliul stabil în Cluj-Napoca sau în localităţile limitrofe.</li></ul></div>
   <div class="myDiv1" ><h2> Tinichigiu / sudor auto</h2>
    <ul type = "square"><li>studii medii (liceale sau profesionale de specialitate);</li></ul>
   <ul type = "square"><li>caracter serios, punctualitate;</li></ul>
   <ul type = "square"><li>experienţă în domeniu;</li></ul>
   <ul type = "square"><li>domiciliul stabil în Cluj-Napoca sau în localităţile limitrofe.</li></ul></div>
   <div class="myDiv2" ><h2> Electrician auto</h2>
    <ul type = "square"><li>studii medii (liceale sau profesionale de specialitate);</li></ul>
   <ul type = "square"><li>caracter serios, punctualitate;</li></ul>
   <ul type = "square"><li>experienţă în domeniu;</li></ul>
   <ul type = "square"><li>domiciliul stabil în Cluj-Napoca sau în localităţile limitrofe.</li></ul></div>
   <div class="myDiv3" ><h2> Şef coloană / impegat auto</h2>
    <ul type = "square"><li>studii medii (liceale);</li></ul>
   <ul type = "square"><li>caracter serios, punctualitate;</li></ul>
   <ul type = "square"><li>experienţă în domeniul transportului de călători în regim de curse regulate;</li></ul>
   <ul type = "square"><li>domiciliul stabil în Cluj-Napoca sau în localităţile limitrofe.</li></ul></div>
</div>
<br>
 <br>

</body>
</html>

