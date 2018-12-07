<?php
    session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    // var_dump($email, $senha );

    include "conexao.php";
    
    $sql = $con->query("SELECT * FROM usuario WHERE nm_email = '$email'");
    
    $users = $sql->fetch(PDO::FETCH_OBJ);
    
    if(($email == $users->nm_email) && ($senha == $users->nm_senha)){
        
        if($users->ds_tipo == 1){
            
            $_SESSION['codigo'] = $users->cd_usuario;
            
            var_dump($_SESSION['codigo']);
        	header("Location: indexProprietario.php");
        }
        
        if($users->ds_tipo == 2){
            
            $_SESSION['codigo'] = $users->cd_usuario;
        	header("Location: indexFuncionario.php");
        }
	    
	}
	else{
	    header("location: index.php?email= $email");
	}
    
?>