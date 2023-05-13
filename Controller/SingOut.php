<?php
session_start();
session_destroy();
?>
<?php
echo "<hr>";
header('location: ../View/SingIn.php');
?>