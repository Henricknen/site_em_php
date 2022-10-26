<?php

@$pagina = $_GET['page'];

if($pagina == 2) {
    require_once('mais.php');
} else {
    require_once('sobre.php');
}

?>