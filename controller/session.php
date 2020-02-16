<?php
session_start();
if ($_SESSION['status'] != 'LOGADO') {
    header("Location: login.html"); // Chamar um form de login por exemplo.
}
?>