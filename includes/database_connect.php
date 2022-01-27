<?php
$conn = mysqli_connect("localhost", "root", "", "lifepg");

if(mysqli_connect_errno()){
    //Throw error massege based on ajax or not
    echo "Failed to connect to MYSQL! Please connect the admin.";
    return;
}