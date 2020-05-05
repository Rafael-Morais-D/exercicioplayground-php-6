<?php

var_dump($_GET);

?>

<form class="" action="get.php" method="GET">
    <input type="text" name="nome" value="">
    <input type="text" name="sobrenome" value="">
    <input type="number" name="idade" value="">

    <button type="submit" name="button"> Enviar </button>
</form>

<?php

echo "<h1>" . $_GET['nome'] . " " . $_GET['sobrenome'] . " tem " . $_GET['idade'] . " anos.";

?>