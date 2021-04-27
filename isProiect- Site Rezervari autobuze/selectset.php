<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
<style>
body{
font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
font-size:12px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:400px;
padding:14px;
}

/* ----------- stylized ----------- */
#stylized{
border:solid 2px #b7ddf2;
background:#ebf4fb;
}
#stylized h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
}
#stylized p{
font-size:11px;
color:#666666;
margin-bottom:20px;
border-bottom:solid 1px #b7ddf2;
padding-bottom:10px;
}
#stylized label{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
#stylized .small{
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:140px;
}
#stylized input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized button{
clear:both;
margin-left:150px;
width:125px;
height:31px;
background:#666666 url(img/button.png) no-repeat;
text-align:center;
line-height:31px;
color:#FFFFFF;
font-size:11px;
font-weight:bold;
}
</style>

<?php
include('db.php');
$busnum=$_POST['route'];
$data=$_POST['data'];
$qty=$_POST['qty'];
$result = mysqli_query($conn,"SELECT * FROM route WHERE id='$busnum'");

while($row = mysqli_fetch_array($result))
	{
		$numofseats=$row['numseats'];
		$query = mysqli_query($conn,"SELECT sum(seat_reserve) FROM reserve where date = '$data'");
			while($rows = mysqli_fetch_array($query))
			  {
				 $inogbuwin=$rows['sum(seat_reserve)'];
			  }
		$avail=$numofseats-$inogbuwin;
		$setnum=$inogbuwin+1;
	}
?>

<?php
if ($avail < $qty){
echo 'Qty reserve exced the available seat of the bus';
}
else if($avail > 0)
{
?>
<script type="text/javascript">
function validateForm()
{
var x=document.forms["form"]["fname"].value;
if (x==null || x=="")
  {
  alert("Prenumele trebuie completat.");
  return false;
  }
var y=document.forms["form"]["lname"].value;
if (y==null || y=="")
  {
  alert("Numele trebuie completat.");
  return false;
  }
var a=document.forms["form"]["address"].value;
if (a==null || a=="")
  {
  alert("Adresa trebuie completata.");
  return false;
  }
var b=document.forms["form"]["contact"].value;
if (b==null || b=="")
  {
  alert("Avem nevoie de numarul dumneavoastra de contact");
  return false;
  }

}
</script>

<h1 style="color:DarkBlue;"><center>Rezervare bilet - Introducere date<center></h1><br><br>

<div id="stylized" class="myform">
<form id="form" name="form" action="save.php" method="post"  onsubmit="return validateForm()">
<input type="hidden" value="<?php echo $busnum ?>" name="busnum" />
<input type="hidden" value="<?php echo $date ?>" name="date" />
<input type="hidden" value="<?php echo $qty ?>" name="qty" />
<label>Numar Loc
<span class="small">Generare automata<a rel="facebox" href="seatlocation.php?id=<?php echo $busnum; ?>">Locuri</a></span>
</label>
<input type="number" name="setnum" min="1" max="50" ><br>
<label>Prenume
<span class="small">Introduceti Prenumele</span>
</label>
<input type="text" name="fname"  id="name"/><br>
<label>Nume
<span class="small">Introduceti Numele</span>
</label>
<input type="text" name="lname"  id="name"/><br>
<label>Adresa
<span class="small">Introduceti Adressa</span>
</label>
<input type="text" name="address"  id="name"/><br>
<label>Contact
<span class="small">Introduceti numarul de telefon</span>
</label>
<input type="text" name="contact"  id="name"/><br>
<button type="submit">Confirmare</button>
</form>
</div>
<?php
}
else if($avail <= 0)
{
echo 'no available sets';
}
?>