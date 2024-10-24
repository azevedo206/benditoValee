<?php
session_start();
session_destroy(); //encerra sessão
header('location:#'); //volt a pag login
?>