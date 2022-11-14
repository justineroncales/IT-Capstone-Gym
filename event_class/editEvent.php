

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

if ($a->checkExistEventName( $_POST["event_name"])) {
    $message = $_POST["event_name"].' '.' already exists. Please try again.';
    header("Location: ../module/event.php?error=".encrypt_data("error", $message));
    
}else{
if (isset($_POST['event_id'])){
    $a -> editEvent($_POST["event_id"], 
    $_POST["event_name"], 
    $_POST["event_venue"], 
    $_POST["event_instructor"], 
    $_POST["event_date"], 
    $_POST["event_timeStart"], 
    $_POST["event_timeEnd"], 
    $_POST["event_fee"], 
    $_POST["event_description"] );

    $message = 'Congratulations, your data has been successfully saved.';
    header("Location: ../module/event.php?success=".encrypt_data("success", $message));
}
}
?>























