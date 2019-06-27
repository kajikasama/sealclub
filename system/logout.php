<?php
include 'konfig.php';
session_start();
session_destroy();

redirect('Terima Kasih','login.php');

?>