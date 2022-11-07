<?php

// @$pagina = $_GET['page'];
$pagina = isset($_GET['page']) ? $_GET['page'] : "";        /* verificando se 'page' esta setada "SET" */

if($pagina == 2) {
    require_once 'mais.php';
} else if ($pagina == 3) {
    require_once 'postagem.php';
} else {
    require_once 'sobre.php';
}

?>