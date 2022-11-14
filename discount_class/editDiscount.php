
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

if ($a->checkExistDiscountName( $_POST["discountname"])) {

    $message = $_POST["discountname"].' '.' already exists. Please try again.';
    header("Location: ../module/discount.php?error=".encrypt_data("error", $message));

    
}else{
if (isset($_POST['discount_id'])){
    $a -> editdiscount($_POST["discount_id"], 
    $_POST["discountname"],
    $_POST["discountprice"],  
    $_POST["discountdescription"]);
    $message = 'Congratulations, your data has been successfully saved.';
    header("Location: ../module/discount.php?success=".encrypt_data("success", $message));
}
}
?>
















