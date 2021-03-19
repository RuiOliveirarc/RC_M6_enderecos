<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title></title>
</head>
<body>




<?php
	if(isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['n3']) && isset($_POST['n4'])){

		$n1=$_POST['n1'];
		$n2=$_POST['n2'];
		$n3=$_POST['n3'];
		$n4=$_POST['n4'];


		if ($n1>=0 && $n1<=255 && $n2>=0 && $n2<=255 && $n3>=0 && $n3<=255 && $n4>=0 && $n4<=255) {

			echo 'Endereço:' .$n1.'.'.$n2.'.'.$n3.'.'.$n4;

			echo '<br>';
			
			classe($n1);
			
			echo '<br>';
			
			tipo($n1,$n2,$n3,$n4);

			back();


		}
		else{
			erro();
		}


	}
	elseif (isset($_POST['protocol'])) {
		$prot=$_POST['protocol'];
		echo "<h3>$prot</h3>";
		protocol($prot);
		back();
	}
	else{
		erro();
	}





	function classe($num){
		if ($num>=1 && $num<=126) {
			echo "Endereço tipo A";
		}
		elseif ($num==127) {
			echo "Este endereço está reservado para loopback ou localhost";
		}
		elseif ($num<=191) {
			echo "Endereço tipo B";
		}
		elseif ($num<=223) {
			echo "Endereço tipo C";
		}
		elseif ($num<=239) {
			echo "Endereço tipo D";
		}
		elseif ($num<=254) {
			echo "Endereço tipo E";
		}
	}

	function tipo($num1,$num2,$num3,$num4){
		if($num1==10 || $num1==172 && $num2>=16 && $num2<=31 || $num1==192 && $num2==168){
			echo 'Privado';
		}
		elseif ($num1==0 || $num1==127 ||$num1==255 || $num4==255) {
			echo 'Invalido';
		}
		elseif ($num1==191 && $num2==255 || $num1==191 && $num2==0 && $num3==0 || $num1==223 && $num2==255 && $num3==255 || $num1>=224 && $num1<= 239 || $num1>=240 && $num1<=255) {
			echo 'Reservado';
		}
		else{
			echo 'Publico';
		}
	}

	function protocol($nome){
		if($nome=='DNS'){
			echo " é o protocolo utilizado para associar a cada endereço IP um nome, pois desta forma é mais fácil de ser memorizado pelos utilizadores. Por exemplo, www.portoeditora.pt, poderá, corresponder ao endereço IP 192.16831.32.";
		}
		elseif ($nome=='HTTP') {
			echo " é o protocolo utilizado para controlar a comunicação entre o servidor de Internet e o browser, ou seja, serve de suporte à World Wide Web. É o que nos permite escrever na Barra de Endereços do nosso browser um endereço URL [Uniform Resource Locator] e rapidamente receber a página Web correspondente.";
		}
		elseif ($nome=='FTP') {
			echo " é o protocolo utilizado para a transferência de ficheiros. Serve para fazermos odownload ou upload de ficheiros de ou para servidores FTP, aquele cujo endereço começa por ftp://.";
		}
		elseif ($nome=='SMTP') {
			echo " é o protocolo usado para enviar mensagens de correio eletrónico dos computadores clientes para os servidores e também para transferir mensagens entre servidores.";
		}
		elseif ($nome=='TELNET') {
			echo " é o protocolo associado ao serviço de acesso remoto a outros computadores através de linha de comandos (terminal).";
		}
		elseif ($nome=='TCP') {
			echo " é o protocolo utilizado no transporte de informação entre os computadores emissor e recetor e garante a segurança dessa mesma informação.";
		}
		elseif ($nome=='UDP') {
			echo " é um protocolo de transporte de informação entre os computadores emissor e recetor, no entanto, não garante a segurança da informação transmitida.";
		}
		elseif($nome=='IP'){
			echo " é o protocolo responsável por estabelecer a ligação entre os computadores emissor e recetor para que a informação não se perca na rede.";
		}
		elseif($nome=='ICMP'){
			echo " é o protocolo responsável pelo envio de mensagens para responder a pacotes de dados que não foram entregues corretamente. Desta forma é enviada uma mensagem ICMP e volta a ser enviado o pacote de dados não recebido.";
		}
	}
	function back(){
		echo "<br>";
		echo '<a href="form.php">
			<img src="house.svg" style="height:30px">
		</a>';
	}

	function erro(){
		echo "<h1>ERRO</h1>";
		header("refresh:2;url=form.php");
	}

?>
	<script src="js/jquery-3.5.1.min.js"></script>
  	<script src="js/bootstrap.js"></script>
	</body>
</html>