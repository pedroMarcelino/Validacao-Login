<?php
    $erro = $_GET['erro'];
    $email = $_GET['email'];
?>

<!DOCTYPE html>
<html>

    <head lang="pt-br">
        <meta charset="utf-8">
        <title>validaçao login e cadastro</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
    <?php
        if($erro == "erro"){?>
            <script>
                $(document).ready(function() {
        			$('#erro').modal('show');
        		}) 
            </script><?php
        }
        
        if($erro == "success"){?>
            <script>
            $(document).ready(function() {
			    $('#sucesso').modal('show');
		    }) 
            </script><?php
        }
        
        if($erro == "duplicado"){?>
            <script>
            $(document).ready(function() {
			    $('#duplicado').modal('show');
		    }) 
            </script><?php
        }
        
        if($email != ""){?>
            <script>
            $(document).ready(function() {
			    $('#loginErro').modal('show');
		    }) 
            </script><?php
        }
    ?>

    <body>
        <nav id="navIndex" class="navbar navbar-expand-lg fixed-top navbar-light">
            <a id="logo" class="navbar-brand">LOGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul id="canto" class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#login">Login</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Cadastro
                    </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" data-toggle="modal" data-target="#cadastroFuncionario">Funcionario</a>
                            <a class="dropdown-item" data-toggle="modal" data-target="#cadastroProprietario">Proprietario</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        
        <div class="modal fade" id="cadastroFuncionario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <center><h5 class="modal-title" id="titulo">Cadastre-se</h5></center>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="register">
                            <form action="cadastro.php" method="POST">
                                <input type="hidden" name="codigo" value="2" />
                                <div>
                                    <input type="text" name="nome" required="">
                                    <label>Nome </label>
                                </div>
                                <div>
                                    <input type="text" name="sobrenome" required="">
                                    <label>Sobrenome </label>
                                </div>
                                <div>
                                    <input type="email" name="email" required="">
                                    <label>Email </label>
                                </div>
                                <div>
                                    <input type="password" name="senha" required="">
                                    <label>Senha</label>
                                </div>
                                <div>
                                    <input type="password" name="confSenha" required="">
                                    <label>Confirma senha</label>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="btnEnviar" class="btn btn-default btn-block">Enviar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="cadastroProprietario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <center><h5 class="modal-title" id="titulo">Cadastre-se</h5></center>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="register">
                            <form action="cadastro.php" method="POST">
                                <input type="hidden" name="codigo" value="1" />
                                <div>
                                    <input type="text" name="nome" required="">
                                    <label>Nome </label>
                                </div>
                                <div>
                                    <input type="text" name="sobrenome" required="">
                                    <label>Sobrenome </label>
                                </div>
                                <div>
                                    <input type="email" name="email" required="">
                                    <label>Email </label>
                                </div>
                                <div>
                                    <input type="password" name="senha" required="">
                                    <label>Senha</label>
                                </div>
                                <div>
                                    <input type="password" name="confSenha" required="">
                                    <label>Confirma senha</label>
                                </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="btnEnviar" class="btn btn-default btn-block">Enviar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <center><h5 class="modal-title" id="exampleModalLabel">Login</h5></center>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="register">
                            <form action="validacaoLogin.php" method="POST">
                                <div>
                                    <input type="email" name="email" required="">
                                    <label>Email </label>
                                </div>
                                <div>
                                    <input type="password" name="senha" required="">
                                    <label>Senha</label>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="btnEnviar" class="btn btn-default btn-block">Enviar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="loginErro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <center><h5 class="modal-title" id="exampleModalLabel">Erro no login</h5></center>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="LoginErro">
                            <form action="validacaoLogin.php" method="POST">
                                <div>
                                    <input type="email" name="email" required="" value="<?php echo $email;?>">
                                    <label>Email </label>
                                </div>
                                <div>
                                    <input type="password" name="senha" required="">
                                    <label>Senha</label>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="btnEnviar" class="btn btn-default btn-block">Enviar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="erro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="divErro" id="exampleModalLongTitle">Erro :(</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div id="divErro" class="modal-body">
                        <center><p>Ocorreu um erro tente novamente!</p></center>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="duplicado" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="divErro" id="exampleModalLongTitle">Erro :(</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div id="divErro" class="modal-body">
                        <center><p>Ocorreu um erro, o email ja foi cadastrado! </p></center>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="sucesso" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Sucesso :)</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div id="divSucesso" class="modal-body">
                        <center><p>Cadastrado com sucesso!</p></center>
                    </div>
                </div>
            </div>
        </div>


    </body>

</html>
