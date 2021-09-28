<?php
$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);

if ($nome != "") {
    $lista = file_get_contents("cadastro.txt");

    $novoNome = "<li>$nome</li>";

    $lista .= "\n$novoNome";

    file_put_contents("cadastro.txt", $lista);

    header("Location: index.php");
    exit;
} else {
    header("Location: index.php");
    exit;
}
