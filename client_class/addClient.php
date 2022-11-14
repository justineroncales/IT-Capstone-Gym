<?php
include '../includes/connection/admin.php';

//include this library
//add images folder for images saving

include '../phpqrcode/qrlib.php';

//generate the qrcode get client_id for identity add timestamp for uniqueness then pass to posting at the bottom of the code via $qrcode variable
$path = "../images/";
$qrcode = $path.time().".png";
$client_id = $_POST["client_id"];
QRcode::png($client_id, $qrcode, 'L', 4, 2);
// end of qrgenerate code

$a = new Admin();
function encrypt_data($key, $message) {

    $ciphering = "AES-128-CTR";

    $iv_length = openssl_cipher_iv_length($ciphering);
    $option = 0;

    $encryption_iv= '1234567891011121';

    $encryption_key = $key;

    return $encryption = openssl_encrypt($message, $ciphering, $encryption_key, $option, $encryption_iv);
}



if ($a->checkExistClient( $_POST["client_name"], $_POST['client_lastname'], $_POST['client_birthdate'] )) {

    $message ='Someone already has that name. Please try again.';

    header("Location: ../module/client.php?error=".encrypt_data("error", $message));

    
}else if($a->checkExistEmail( $_POST["client_email"])){
    $message ='Someone already has that email. Please try again.';

    header("Location: ../module/client.php?error=".encrypt_data("error", $message));
    
}
else{
   
if (isset($_POST["client_id"])){ // check if naay present na variable 
    $a -> addClient($_POST["client_id"],
     $_POST["client_name"],
     $_POST["client_middlename"], 
     $_POST["client_lastname"], 
     $_POST["client_email"], 
     $_POST["client_birthdate"], 
     $_POST["contact_number"],
     $_POST["client_type"],
     $_POST["class_type"],
     $_POST["status_type"],
     $_POST["client_code"]= $qrcode);    

     $message = 'Congratulations, your data has been successfully saved.';
    header("Location: ../module/client.php?success=".encrypt_data("success", $message));

}

}
?>


