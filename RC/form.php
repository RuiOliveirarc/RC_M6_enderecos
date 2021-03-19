<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title></title>
</head>
<body>



 
<h1>Classes IP</h1>

<h3>Digite o endereço IP que pertende verificar</h3>
<form action="verificar.php" method="post">
	<input type="text" name="n1">
	<input type="text" name="n2">
	<input type="text" name="n3">
	<input type="text" name="n4">
	<input type="submit" name="enviar">
</form>
<br>
<h2>Selecione um protocol</h2>
<form action='verificar.php' method="post">
  	<select name='protocol'>
    	<option value='HTTP'>HTTP</option>
    	<option value='FTP'>FTP</option>
    	<option value='SMTP'>SMTP</option>
    	<option value='TELNET'>Telnet</option>
    	<option value='TCP'>TCP</option>
    	<option value='UDP'>UDP</option>
    	<option value='DNS'>DNS</option>
   		<option value='IP'>IP</option>
   		<option value='ICMP'>ICMP</option>
  	</select>
  	<input type='submit' value='Submit'>
</form>

  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
</body>
</html>