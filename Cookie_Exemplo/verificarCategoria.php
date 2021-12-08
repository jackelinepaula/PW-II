<?php

header("Location: index.php");

$codctg = $_POST['slcCategoria'];
setcookie('codcategoria', $codctg);

?>