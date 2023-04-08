<?php
    include("../dbFunction/dbConnection.php");

    $signInEmail = $_GET['signInEmail'];
    $signInPassword = $_GET['signInPassword'];
   
    // Select Duplicate Data
    $select_user = "SELECT * FROM novau_login WHERE email_address='$signInEmail' AND user_pass='$signInPassword'";
    $query_select = mysqli_query($dbConn, $select_user);
    $num_row = mysqli_num_rows($query_select);
    if($num_row == 1){
        $fetch_record =  mysqli_fetch_array($query_select);
        session_start();
        $_SESSION['session_userId'] = $fetch_record['id'];
        $message =  ["message" => "Record found", "status" => true, "pagePath" =>"index.php"];
    }
    else{        
        $message =  ["message" => "Record Not Found", "status" => false, ];
    }

    echo json_encode($message);
    
?>