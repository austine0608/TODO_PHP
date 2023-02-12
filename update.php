<?php
    require('connection.php');

    $id = $_GET['updateid'];
    
    if(isset($_POST['submit'])){
        $tk = $_POST['task'];

        $query = "UPDATE `todos` SET  task = '$tk' WHERE id=$id";

        $result = mysqli_query($conn, $query);

        if($result){
            // echo "Data Posted Successfully";
            header('Location: ./home.php');
        }
        else{
            echo "Wrong Information";
        }
    }

    $query = "SELECT * FROM `todos` WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $task = $row['task'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
<center>
            <div id="demo">
                <h2 style="color:white">Update Form</h2>
                <form action="?updateid=<?php echo $id?>"method="POST">
                <div style="color:white"id="lo">
                        Task: <br><textarea input type="text"name="task"placeholder="Type Your To Do"rows="6px"cols="50px" required id="lo">
                        
                        <?php echo $task;?></textarea><br><hr>
                            <input type="submit"name="submit"value="Submit"><br><hr>
                    </div>
                </form>
            </div>
    </center>
</body>f
</html>
