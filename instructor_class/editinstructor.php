
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

if ($a->checkExistInstructor( $_POST["instructorFirstname"], $_POST['instructorLastname'], $_POST['instructorBirthdate'] )) {
    $message ='Someone already has that name. Please try again.';
    header("Location: ../module/instructor.php?error=".encrypt_data("error", $message));

    
}else if($a->checkExistInstructorEmail( $_POST["instructorEmail"])){
    $message ='Someone already has that email. Please try again.';
    header("Location: ../module/instructor.php?error=".encrypt_data("error", $message));
  
}
else{
if (isset($_POST['instructor_id'])){
    $a -> editInstructor($_POST["instructor_id"], 
    $_POST["instructorfirstname"], 
    $_POST["instructormiddlename"], 
    $_POST["instructorlastname"], 
    $_POST["instructorContactNumber"], 
    $_POST["instructorBirthdate"], 
    $_POST["instructoremail"]);

    $message = 'Congratulations, your data has been successfully updated.';


    header("Location: ../module/instructor.php?success=".encrypt_data("success", $message));
}
}
?>





















