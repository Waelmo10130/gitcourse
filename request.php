<?php

function getRequestTypePost(){
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        return true;
    }
    return false;
}

function receiveInput($value){
    return trim(htmlentities(htmlspecialchars($value)));
}