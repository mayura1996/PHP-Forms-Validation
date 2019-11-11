<?php

session_start();

$regValue = $_GET['regName'];

echo "Your registration is: ".$regValue.".";

?>

<p><a href="form2.php">Back to set_reg.php</a