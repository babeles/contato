<?php
include './contato.class.php';
$contato = new Contato();

if (isset($_POST['cto_nm']) && !empty($_POST['cto_nm'])) {
    $cto_nm = addslashes(strtolower($_POST['cto_nm']));
    $cto_dceml = addslashes(strtolower($_POST['cto_dceml']));
    $cto_nrtel = addslashes($_POST['cto_nrtel']);
    
   $contato->adicionarContato($cto_nm, $cto_dceml, $cto_nrtel);
   
}

header("Location: index.php");