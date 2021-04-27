<html>
 <head>
  <title>Admin Page</title>
  
  <style>
$time: 330ms;

$btns: (
  alpha: (
    gstart: #21D4FD,
    gend: #B721FF,
    tstart: #B721FF,
    tend: #21D4FD,
	background-color: #21D4FD
  ),
  beta: (
    gstart: #08AEEA,
    gend: #2AF598,
    tstart: #2AF598,
    tend: #08AEEA
  ),
  gamma: (
    gstart: #FEE140,
    gend: #FA709A,
    tstart: #FA709A,
    tend: #FEE140
  ),
  delta: (
    gstart: #3EECAC,
    gend: #EE74E1,
    tstart: #EE74E1,
    tend: #3EECAC
  )
);


* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

html {
  font-size: 20px;
}

body {
   background-image: url('autobuz.jpg');
   background-repeat: no-repeat;
   background-attachment: fixed;
   background-size: cover;
   align-items: center;
   justify-content: center;
   flex-direction: column;
   min-height: 100vh;
  display: flex;
}
/*body {
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}*/

.btn {
  font-family: 'Source Sans Pro', sans-serif;
  font-weight: 900;
  padding: 1.25rem 2rem;
  font-size: 1rem;
  border-radius: 3.5rem / 100%;
  position: relative;
  min-width: 15rem;
  max-width: 90vw;
  overflow: hidden;
  border: 0;
  cursor: pointer;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  transition: all $time;
  
  & + & {
    margin-top: 1rem;
  }
  
  span {
    position: relative;
    z-index: 1;
  }
  
  &:before {
    content: "";
    background-color: #21D4FD;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    transform: scale(4) translateX(-100%);
    transition: all $time * 1.5 ease-out;
  }
  
  &:hover,
  &:focus,
  &:active {    
    &:before {
      transform: scale(4) translate(37%);
    } 
  }
}


@each $bname, $bcolors in $btns {
  .btn--#{$bname} {
    background-color: map-get($bcolors, gstart);
    color: map-get($bcolors, tstart);
  
    &:before {
      background-color: map-get($bcolors, gend);
      background-image: linear-gradient(to right, map-get($bcolors, gend) 30%, map-get($bcolors, gstart) 100%);
      position: absolute;
    }
    
    &:hover,
    &:focus,
    &:active {    
      color: map-get($bcolors, tend);
    }
  }
}
 h1 {color: SteelBlue;
     top:-20;
     left:540;
    position:absolute;
     align-items: center;
   justify-content: center;
}

 #button {
     line-height: 12px;   
     font-size: 14pt;
     font-family: tahoma;
     margin-top: 1px;
     margin-right: 2px;
     position:absolute;
     top:0;
     left:0;
 }

</style>
</head>
<body>
 
  <h1><font size="7">Admin Page</font></h1> <br>

<button class="btn btn--beta" onclick="location.href='register.php'"><span>Modificare conturi utilizator</span></button>
<button class="btn btn--gamma" onclick="location.href='rute_editare_admin.php'"><span>Editeaza Rute</span></button>
<button class="btn btn--delta" onclick="location.href='rute_adaugare_admin.php'"><span>Adauga Rute</span></button>
<button class="btn btn--alpha" onclick="location.href='rute_stergere.php'"><span>Sterge Rute</span></button>
<button class="btn btn--alpha" onclick="location.href='anunturi.php'"><span>Adauga anunturi</span></button>
<button class="btn btn--alpha" onclick="location.href='anunturi_stergere.php'"><span>Sterge anunturi</span></button>

<input id="button" type="button" value="Logout Admin" onclick="location.href='principal.php'">

</body>
</html>