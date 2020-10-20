<?php 

    $text = $_POST['text'];
    $plato = $_POST['plato'];
    $size = $_POST['size'];

    $pedido = array($text, $plato, $size);

    header("Location: index.php");
?>