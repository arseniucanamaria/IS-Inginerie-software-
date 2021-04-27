<html>
<head>
<style>

.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #7FCDCD;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #F7CAC9;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: ##6B5B95;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: ##6B5B95;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

.wrapper{
    background:red;
    overflow:auto;
}
.myDiv1 {
  height: 350px;
  width: 32%;
  border: 5px outset red;
  background-color: lightblue;    
  text-align: left;
  float: right;
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

h3 {
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
</div>

<center><b><i><u><font size="6" color = "Red " > Contacteaza-ne ...</font></u></i></b></center>
 <br>
 <br>
 
<font size="4" align=center>
 <b> Pentru rezervări vă rugăm să ne contactaţi prin urmatoarele modalitati (program zilnic, inclusiv sâmbătă şi duminică, între orele 7:00-20:00):</b>
 <br>
 <br>
 <br>
 
 <div class="myDiv1" ><h3>TELEFON</h3>
<div style="background-color:black;color:white;padding:20px;">
  <ul type = "square"><li>0741 607 941</li></ul>
   <ul type = "square"><li>0747 235 661</li></ul>
   <ul type = "square"><li>0726 626 644</li></ul></div>
</div> </div> 


<div class="myDiv1" ><h3>FAX</h3>
<div style="background-color:black;color:white;padding:20px;">
   <ul type = "square"><li>0364 887 191</li></ul></div>
</div> </div> 

<div class="myDiv1" ><h3>EMAIL</h3>
<div style="background-color:black;color:white;padding:20px;">
 <ul type = "square"><li>office@AUTO-BUS.ro</li></ul>
</div> </div> <br><br><br><br>
   
 

<button class="open-button" onclick="openForm()">Feedback</button>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Feedback</h1>

    <label for="msg"><b>Doriti sa ne transmiteti ceva? </b></label>
    <textarea placeholder="Scrie aici.." name="msg" required></textarea>
	<div  class="popup" onclick="myFunction()" >
	<button type="button" class="btn cancel" onclick="myFunction() class="popup"> Trimite</button>
    <span class="popuptext" id="myPopup">Multumim pentru mesaj!</span>
    </div>
    <button type="button" class="btn cancel" onclick="closeForm()">Inchide</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
  
}
</script>

   

<br>
 <br>

</body>
</html>

