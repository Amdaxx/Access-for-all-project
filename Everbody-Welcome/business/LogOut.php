<?php
 
 session_start();
 session_destroy();
 header('Location: /Everbody-Welcome/public/landingPage.php');
 exit;

?>