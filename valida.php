<?php

    if($_POST != null) {
        if(strlen($_POST['nomeCompleto']) == 0){
            echo "Campo nome não pode estar vazio.<br>";
        }

        if(strlen($_POST['usuario']) < 8){
            echo "Campo usuário deve ter ao menos 8 caracteres.<br>";            
        }

        if(is_numeric($_POST['senha']) == false){
            echo "Campo senha deverá ter apenas numeros.<br>";
        }
        
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false){
            echo "Verifique o formato do seu email.<br>";            
        }
    }

?>
<form action="valida.php" method="post">
    <label for="nomeCompleto">Nome</label><br>
        <input type="text" name="nomeCompleto" value=""><br>
    <label for="usuario">Usuário</label><br>
        <input type="text" name="usuario" value=""><br>
    <label for="senha">Senha</label><br>
        <input type="password" name="senha" value=""><br>
    <label for="email">E-mail</label><br>
        <input type="text" name="email" value=""><br>
    <button type="submit" name="button">Enviar</button>
</form>