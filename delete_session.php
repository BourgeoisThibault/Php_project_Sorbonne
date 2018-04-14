<?php
session_start();
session_destroy();
unset($_SESSION);
unset($_SESSION['panier']);
header('Location: index.php');
?>