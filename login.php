<?php
session_start();
include("core/request.php");
include("core/vaildation.php");
include("core/session.php");

$errors = [];

if(getRequestTypePost()){
    foreach($_POST as $key => $value){
        //* equal  filter input();
        $$key = receiveInput($value);
    }
    if(requiretInput($username)){
        $errors[] = "username require ya bitch";
    }elseif(minInput($username,3)){
        $errors[] = "name must be greater than 3 chars ";
    }elseif(maxInput($username,20)){
        $errors[] = "name must be smaller than 20 chars ";
    }
    
    if(requiretInput($email)){
        $errors[] = "email require ya monkey you simller to marwan .";
    }elseif(emailInput($email)){
        $errors[] = "email require ya <h3>Donkey</h3> ";
    }


    if(empty($errors)){
        header("location:homePage.php");
    }else{
        sessionStore("errors",$errors);
        header("location: index.php");
    }


}else{
    echo "Method not allow ";
}



?>
