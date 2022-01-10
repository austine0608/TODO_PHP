<?php
require('connection.php');
    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $sql = "DELETE FROM `todos` WHERE id = $id";
        $result = mysqli_query($conn, $sql);

        if($result){
            header('Location: ./home.php');
        }
        else{
            echo "Could Not Delete Data";
        }
    }
?>