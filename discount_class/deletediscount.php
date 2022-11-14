<?php

include '../includes/connection/admin.php';

$a = new Admin();

if (isset($_POST['id'])){
    $a -> deletediscount($_POST['id']);
  
}


?>



