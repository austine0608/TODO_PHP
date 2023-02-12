<?php

    require('connection.php');

    if(isset($_POST['submit'])){

        $tk = $_POST['task'];

        $query = "INSERT INTO `todos`(`task`) VALUES ('$tk')";

        $result = mysqli_query($conn, $query);

        if(!$result){
            echo "Could Not Post Data";
        }
        if($result){
            echo "Data Posted Successfully";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do Activities</title>
    <Link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <center>
            <div id="demo">
            <h2 style="color:white">Daily Task</h2>
                <form action="home.php" method="POST">
                    <div style="lo">
                              <br><input type="hidden"name="id">
                        Task: <br><textarea input type="text"name="task"placeholder="Type Your To Do"rows="6px"cols="50px" required id="lo"></textarea><br><hr>
                            <input type="submit"name="submit"value="Submit"id="bt"><br><hr>
                    </div>
                </form>
                <h2><u>Daily Task</u></h2>
            <div>

                <table border = 3>
                    <tr>
                        <th>id</th>
                        <th>Task</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        $query = "SELECT * FROM `todos`";
                        $result = mysqli_query($conn, $query);
                        if($result){
                            $sn = 0;
                            while($row = mysqli_fetch_assoc($result)){
                                $sn += 1;
                                $id = $row['id'];
                                $task = $row['task'];

                                echo '<tr>
                                <th scope = "row">'.$sn.'</th>
                                <td>'.$task.'</td>
                                <td>
                                    <button><a href="delete.php?deleteid='.$id.'">Delete</button>
                                    <button><a href="update.php?updateid='.$id.'">Update</button>
                                </td>
                                </tr>';
                            }
                        }
                    ?>
                </table>
            </div><br><hr>
            </div><br><hr>
    </center>
</body>
</html>