<?php
if(!isset($_COOKIE["redirect"]))
{
    $pagina_login = "../index.php";
}
else
{
    $pagina_login = $_COOKIE["redirect"];
}
setcookie("tipo_utente", null);
setcookie("id_utente", null);
setcookie("logout", 1);
session_destroy();
header("Location:".$pagina_login);
?>
