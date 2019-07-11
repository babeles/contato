<?php
include './contato.class.php';
$contato = new Contato();

if (isset($_GET['cto_iduni']) && !empty($_GET['cto_iduni'])) {
    $cto_iduni = addslashes($_GET['cto_iduni']);
    
    $contato->excluirContato($cto_iduni);
}

header("Location: index.php");