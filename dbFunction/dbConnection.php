<?php
    $hostName = "localhost";
    $userName = "root";
    $passwordName = "";
    $dbName = "novau";
    
    $dbConn = mysqli_connect($hostName, $userName, $passwordName, $dbName);
    if(!$dbConn){
        die("SERVER ERROR". mysqli_error());
        exit();
    }

   function server_name(){
        
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']==='on'){
            $url="https";
        }
        else{
            $url="http";
        }

        $url.="://".$_SERVER['HTTP_HOST']."/JMCKDS/novapp/";
        return $url; 
    }
    $domainName = server_name();
?>