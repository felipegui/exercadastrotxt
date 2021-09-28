<form method="POST" action="validation.php">
    <label>
        Novo nome:
        </br>
        <input type="text" name="nome" autocomplete="off" />
        <input type="submit" value="Adicionar" />
        <button><a href="apagar.php">Apagar lista</a></button>
    </label>
</form>

<h1>Lista dos itens</h1>

<?php
$lista = file_get_contents("cadastro.txt");

echo "<ul>".$lista."</ul>";
?>