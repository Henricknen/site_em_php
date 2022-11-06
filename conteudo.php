<?php

// @$pagina = $_GET['page'];
$pagina = isset($_GET['page']) ? $_GET['page'] : "";        /* verificando se 'page' esta setada "SET" */

if($pagina == 2) {
    require_once 'mais.php';
} else {
    require_once 'sobre.php';
}

?>