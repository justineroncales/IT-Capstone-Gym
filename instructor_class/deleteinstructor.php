<?php

include '../includes/connection/admin.php';

$a = new Admin();

if (isset($_POST['id'])){
    $a -> deleteinstructor($_POST['id']);
  
}

?>



