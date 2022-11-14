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
if ($a->checkExistPromo( $_POST["promo_name"])) {

$message = $_POST["promo_name"].' '.' already exists. Please try again.';
header("Location: ../module/promo.php?error=".encrypt_data("error", $message));


}else{

if (isset($_POST['promo_id'])){
    $a -> editpromo($_POST["promo_id"], 
    $_POST["promo_name"],
    $_POST["promo_discount"],  
    $_POST["promo_durationStart"], 
    $_POST["promo_durationEnd"], 
    $_POST["promo_description"]);
$message = 'Congratulations, your data has been successfully saved.';
header("Location: ../module/promo.php?success=".encrypt_data("success", $message));
}
}
?>

