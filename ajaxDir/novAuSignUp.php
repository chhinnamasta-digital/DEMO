<?php
    include("../dbFunction/dbConnection.php");

    $signupName = mysqli_real_escape_string($dbConn, $_POST['name']);
    $signupWalletAddress = mysqli_real_escape_string($dbConn, $_POST['wallet']);
    $sigiupEmail = mysqli_real_escape_string($dbConn, $_POST['email']);
    $signupPassword = mysqli_real_escape_string($dbConn, $_POST['passwd']);
   
    // PHp validations

    if($signupName == '' && $signupWalletAddress == '' && $sigiupEmail == '' && $signupPassword == '')
    {
        $message =  ["message" => "All Fields are Required", "status" => false];
    }
    else if(!filter_var($sigiupEmail, FILTER_VALIDATE_EMAIL)){
        $message =  ["message" => "Enter Valid Email Address", "status" => false];
    }
    else{
        // Select Duplicate Data
        $select_user = "SELECT * FROM novau_login WHERE wallet_address='$signupWalletAddress'";
        $query_select = mysqli_query($dbConn, $select_user);
        $num_row = mysqli_num_rows($query_select);
        if($num_row > 0){
            $message =  ["message" => "Record already Exist", "status" => false];
        }
        else{
            
            $insert_data = "INSERT INTO novau_login(user_name, wallet_address, email_address, user_pass) VALUES('$signupName', '$signupWalletAddress' ,'$sigiupEmail', '$signupPassword')";
            $query_insert = mysqli_query($dbConn, $insert_data);
            if($query_insert){
                $message =  ["message" => "Record Saved", "status" => true];
            }
            else{
                $message =  ["message" => "Record Not Saved", "status" => false];
            }
        }
    }

    echo json_encode($message);
    
?>