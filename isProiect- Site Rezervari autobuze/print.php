
<html>
<head>
<style>

body {
   background-image: url('da.jpg');
   background-attachment: fixed;
   background-size: cover;
   text-align: center;
	
    position: fixed;
    top: 40%;
    left: 50%;
    margin-top: -100px;
    margin-left: -200px;
	}
</style>
<body>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=800, height=600, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Inel Power System</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
   setTimeout(function(){
   	docprint.close()
   },750)
}
</script>

<div>Printeaza detaliile rezervarii biletului<br>
<a href="javascript:Clickheretoprint()">Printeaza</a><br><br>

<div id="print_content" style="width: 400px;">
<center><strong>Detaliile Rezervarii Biletului</strong><br><br>
<?php
include('db.php');
$id=$_GET['id'];
$setnum=$_GET['setnum'];
$result = mysqli_query($conn,"SELECT * FROM customer WHERE transactionum='$id'");
while($row = mysqli_fetch_array($result))
	{
		
		echo 'Nume: '.$row['fname'].' '.$row['lname'].'<br>';
		echo 'Adresa: '.$row['address'].'<br>';
		echo 'Contact: '.$row['contact'].'<br>';
		echo 'Plata: '.$row['payable'].'<br>';
	}
$results = mysqli_query($conn,"SELECT * FROM reserve WHERE transactionnum='$id'");
while($rows = mysqli_fetch_array($results))
	{
		$ggagaga=$rows['bus'];
		echo 'Ruta si Tipul Autobuzului: ';
		$resulta = mysqli_query($conn,"SELECT * FROM route WHERE id='$ggagaga'");
		while($rowa = mysqli_fetch_array($resulta))
			{
			echo $rowa['route'].'     :'.$rowa['type'];
			$time=$rowa['time'];
			}
		echo '<br>';
		echo 'Ora plecarii: '.$time;
		echo '<br>';
		echo 'Numar Loc: '.$setnum.'<br>';
		
		
	}
?>
</div></div><br>
<a href="principal.php">Acasa</a>
<a href="rezervareBilet.php">Editeaza datele</a><br><br>

<p>Datele sunt corecte si doresti sa faci plata pe loc?</p>
<input id="button" type="button" value="Plateste cu cardul" onclick="location.href='detaliiCard.php'">

</body>
</head>

</html>