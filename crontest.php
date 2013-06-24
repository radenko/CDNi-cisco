<?php
    error_reporting(E_ALL ^ E_NOTICE);
    echo "CiscoCDNi Cron<br \>";
    require_once 'always.php';
	
    if (!isset($_GET["function"])) {
        echo "Please specify function<br \>";        
    } else {
        $funct = $_GET["function"];
	
        if($funct == "interconnect"){
            $intercon -> cron(); //Call cron function from interconnection.php of newly created interconnection $intercon
        }	
        else if($funct == "reset"){
            echo "Starting reset procedure.<br \>";
            $intercon -> reset();
            echo "Done<br/>";
        }
        else {
            echo "Not implemented<br \>";
        }
    }
?>