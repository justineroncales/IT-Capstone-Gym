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

if ($a->checkExistEventName( $_POST["eventName"])) {
    $message = $_POST["eventName"].' '.' already exists. Please try again.';
    header("Location: ../module/event.php?error=".encrypt_data("error", $message));
    
}else{
if (isset($_POST["event_id"])){ // check if naay present na variable 
  
    $a -> addEvent
    ($_POST["event_id"],
    $_POST["eventName"], 
    $_POST["eventCategory"],
    $_POST["eventVenue"], 
    $_POST["eventInstructor"],
    $_POST["timeStart"],
    $_POST["timeEnd"],
     $_POST["eventDate"], 
     $_POST["eventFee"],
      $_POST["eventDescription"]);

    $message = 'Congratulations, your data has been successfully saved.';
    header("Location: ../module/event.php?success=".encrypt_data("success", $message));

}
}
?>
