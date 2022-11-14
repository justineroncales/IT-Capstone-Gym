<?php

include '../includes/connection/admin.php';
$a = new Admin(); // kahibaw naka ani haha
//maghimo ta og boolean para mo specify if true or false .. kanang if true naka login if false wala .. nya ubanan sa iya
//message
//associative array 
session_start();
$response = array(
    "message" => "",
    "loggedIn" => false
);

if (isset($_POST["username"])){
    if ($a -> login($_POST['username'], $_POST['password'])){ // bali kaning $_POST['Uname'] -- o pass mao ning ako g ingon ganina nga name="Uname" ngadtos input sa HTML.. bali ang iya value sa input mao nang g assign dha sa $_POST[] variable.
        $_SESSION['username'] = $_POST['username'];// first session declaration.. na set na nato ang session.. 
        //e reload nalang nato sa admin./
    

        $response["loggedIn"] = true;
        $response["message"] = "Successfully Login!"; // wala nay echo dinhi...

        //var_dump($_SESSION['username']);
        //exit;
       /// header("Location: dashb.php"); // bali kani mao ang mag redirect ka og asa ka paingon after. 

    }
    else
    {
        // no need na ang loggedIn na array kay naka initialize man cya as false..
        $response["message"] = "Invalid Username/Password!";
        
    
    }
    
}


//ahak mo gamit gyud diay tag JSON.. try lang nato.


echo json_encode($response); // e encode diay suppose /.



?>

