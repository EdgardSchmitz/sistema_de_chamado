<?php

echo '<pre>';
    print_r($_POST);
'</pre>';

$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

$arquivo = fopen('arquivo.txt', 'a');

fwrite($arquivo, $texto);

fclose($arquivo);
//echo $texto;
header('Location: abrir_chamado.php');

?>