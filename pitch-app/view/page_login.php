<?php
header("Content-type:text/html; charset=utf8");

require_once "../model/Conexao.class.php";
require_once "../model/Manager.class.php";
$Login = new Manager();
$Listar = new Manager();



if(isset($_POST["logar"])){
    $result = $Login->logar( $_POST["email"], $_POST["senha"] );
    $listar = $Listar->list_empresa( $_POST["email"], $_POST["senha"] );

    $id = $listar[0]['id'];
    
    if($result->rowCount() == 1){
        header("location: ../index.php?cod=$id");
    }
    else{
        echo "<script>alert('Email ou senha incorretos.')</script";
    }
}


?>

<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="../styles/style-login.css" rel="stylesheet"/>
</head>
<body>
    <form action="" method="post">

        <div class="back" id="back">

            <div class="icon">
                <h1>GRIFO</h1>
            </div>

            <div class="titulo">
                <h1>FAÇA LOGIN</h1>
                <hr>
            </div>

            <div class="btn" onclick="openmenu()">
                <h1></h1>
            </div>
            
        </div>

        
        <div class="menu" id="menu">
            <div class="menu-login">
                <div class="form">
                    <label for="login">EMAIL</label>
                    <input type="text" name="email" class="form-input" placeholder="Digite seu usuario">
                    <hr class="form-hr">
                    <label for="login">SENHA</label>
                    <input type="password" name="senha" class="form-input" placeholder="Digite sua senha">
                    <hr class="form-hr">

                    <button name="logar" type="submit">LOGAR</button>
                </div>

            </div> 
            <div class="btn-close" id="btn-close" onclick="closemenu()">
                <h1>X</h1>
            </div>
            
        </div>

        <script>
            function openmenu(){
                var menu = document.getElementById('menu')
                menu.style.display = "flex";

                setInterval(function(){
                    var btn = document.getElementById('btn-close')
                    btn.style.display = "flex"
                },600)            
            }

            function closemenu(){
                var menu = document.getElementById('menu')
                menu.style.display = "none";

            }
        </script>
    </form>
</body>
</html>