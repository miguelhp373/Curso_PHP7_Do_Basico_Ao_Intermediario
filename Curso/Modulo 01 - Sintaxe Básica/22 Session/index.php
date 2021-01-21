<?php
session_start();
$_SESSION['key'] = date('h:i:s');
echo $_SESSION['key'];
session_destroy();


?>