<?php
    
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confSenha = $_POST['confSenha'];
    
    $codigo = $_POST['codigo'];
    
    include "conexao.php";
    
     $countEmail = $con->query("SELECT * FROM usuario WHERE nm_email = '$email'");
     
     if($countEmail->rowCount()>0){
         $retorno = true;
     }else{
         $retorno = false;
     }
     
     if($retorno == true){
         header("location: index.php?erro=duplicado");
     }else if($retorno == false){
         
        if($senha == $confSenha ){
        $sql = $con->prepare("INSERT INTO usuario (cd_usuario, ds_tipo, nm_email, nm_senha, img_usuario, nm_usuario, sn_usuario)
        VALUE (NULL, '$codigo', '$email', '$senha', NULL, '$nome', '$sobrenome')");
        
        $sql->execute();
        
            header("location: index.php?erro=success");
        }else{
            header("location: index.php?erro=erro");
        }
     }
     
     var_dump($retorno);
    
    
    
    
    var_dump($nome, $sobrenome, $email, $senha, $confSenha);
?>