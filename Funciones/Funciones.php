<?php

function CerrarSesion() {

    session_destroy();
    header("Location: index.php");
}


?>