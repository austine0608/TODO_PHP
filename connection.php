<?php
    $SERVERNAME = "localhost";
    $USERNAME = "root";
    $PASSWORD = "";
    $DBNAME = "todo";

    $conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DBNAME);

    if($conn){
        echo "Connection Successful";
    }
    else{
        echo "Connection Failed";
    }
?>