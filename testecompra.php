<?php
	
	if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
		
		include_once('conexao.php');
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		
		$sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
		
		$result = $conn->query($sql);
		
		if(mysqli_num_rows($result) < 1){
			header('location: compra.html');
		}else{
			header('location: finalizacao.html');
		}
		
	}else{
		header('location: compra.html');
	}

?>