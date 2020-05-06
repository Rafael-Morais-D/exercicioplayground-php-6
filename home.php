<?php

// var_dump($_GET);

if($_GET != null){
    $nome = $_GET['nome'];
    $sobrenome = $_GET['sobrenome'];
    $idade = $_GET['idade'];
    $profissao = $_GET['profissao'];
} else {
    $nome = null;
    $sobrenome = null;
    $idade = null;
    $profissao = null;
}

$a_prof = ['Professor', 'Programador', 'Analista'];

?>
<form class="" action="home.php" method="GET">
    <input type="text" name="nome" value="<?= $nome; ?>" placeholder="Nome">
    <input type="text" name="sobrenome" value="<?= $sobrenome; ?>" placeholder="Sobrenome">
    <input type="number" name="idade" value="<?= $idade; ?>" placeholder="Idade">

    <select name="profissao">
        <option default value="Escolha uma profissao"> Escolha uma profissão</option>
        <?php foreach ($a_prof as $prof): ?>
            <?php if($profissao == $prof){ ?>
                <option selected value="<?= $prof; ?>"><?= $prof; ?></option>
            <?php } else { ?>
                <option value="<?= $prof; ?>"><?= $prof; ?></option>
        <?php } endforeach; ?>
    </select>
    <button type="submit" name="button">Enviar</button>
</form>