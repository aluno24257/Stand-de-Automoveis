<?php

if (isset($_POST["vender"])) {

    $marca = $_POST['marca'];
    $preco = $_POST['preco'];
    $km = $_POST['km'];
    $imagem = base64_encode(file_get_contents($_FILES["imagem"]['tmp_name']));

require_once 'carrosbd.php';
require_once 'funcao.php';

anunciar($mysqli, $marca, $km, $preco, $imagem);

}
else {
    header("location: ../anunciar.php");
    exit();

}

?>