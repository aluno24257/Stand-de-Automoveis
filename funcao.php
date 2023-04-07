<?php

function anunciar($mysqli, $marca, $km, $preço, $imagem)
{
    $sql = "INSERT INTO carros (marca, km, preço, imagem) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($mysqli);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../anunciar.php?error=stmtFalhado");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "siis", $marca, $km, $preço, $imagem);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: explorar.php");
    exit();

}

?>