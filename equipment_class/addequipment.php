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

if ($a->checkExistEquipmentName( $_POST["equipmentname"])) {

    $message = $_POST["equipmentname"].' '.' already exists. Please try again.';
    header("Location: ../module/equipment.php?error=".encrypt_data("error", $message));

    
}else{


if (isset($_POST["equipment_id"])){ // check if naay present na variable 
    $a -> addequipment
    ($_POST["equipment_id"], 
    $_POST["equipmentname"],
    $_POST["equipmentquantity"]);
    $message = 'Congratulations, your data has been successfully saved.';
    header("Location: ../module/equipment.php?success=".encrypt_data("success", $message));


}
}
?>




