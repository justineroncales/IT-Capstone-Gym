<?php
include '../includes/connection/admin.php';

$a = new Admin();
function encrypt_data($key, $message) {

    $ciphering = "AES-128-CTR";

    $iv_length = openssl_cipher_iv_length($ciphering);
    $option = 0;

    $encryption_iv= '1234567891011121';

    $encryption_key = $key;

    return $encryption = openssl_encrypt($message, $ciphering, $encryption_key, $option, $encryption_iv);
}


if ($a->checkExistCategory( $_POST["workoutclassname"])) {
   
    $message = $_POST["workoutclassname"].' '.' already exists. Please try again.';
    header("Location: ../module/workoutclass.php?error=".encrypt_data("error", $message));
    
}else{

if (isset($_POST["workoutclass_id"])){ // check if naay present na variable 
    echo $_POST["time"];
    $a -> addworkoutClass
    ($_POST["workoutclass_id"], 
    $_POST["workoutclassname"], 
    $_POST["workoutclassdescription"]);
    $message = 'Congratulations, your data has been successfully saved.';
    header("Location: ../module/workoutclass.php?success=".encrypt_data("success", $message));

}
}
?>



