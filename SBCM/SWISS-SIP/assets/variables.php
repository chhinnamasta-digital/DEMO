<?php
    $name = "SWISS SIP";
    $root = "";

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']==='on')
    {
        $root="https";
    }
    else
    {
        $root="http";
    }
    $root.="://".$_SERVER['HTTP_HOST']."/JMCKDS/SWISS-SIP/";
    $images = $root."images/"
?>