<?php

var_dump($_POST);


?>

<form class="" action="post.php" method="POST">
    <input type="text" name="nome" value="" placeholder="Nome" required>
    <input type="text" name="sobrenome" value="" placeholder="Sobrenome" required>
    <input type="number" name="idade" value="" placeholder="Idade" required>

    <button type="submit" name="button"> Enviar </button>
</form>

<?php

if($_POST != null) {
    echo "<h1>" . $_POST['nome'] . " " . $_POST['sobrenome'] . " tem " . $_POST['idade'] . " anos.";
} else {
    echo "Preencha os campos acima.";
}

?>