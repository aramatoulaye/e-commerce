<?php
// Détruire la session et rediriger vers la page de connexion
session_start();
session_unset();
session_destroy();
header("location: users.php");
exit();
?>
