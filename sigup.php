<?php
    require_once('connect.php');
    if(!$connect){
        die('Connect failed: ' . mysql_connect_error);
    }
    echo "connection successfully \r";
    
       
        $username = $_POST['rguser'];   
        $pass = $_POST['rgPassword'];
        $sql = "SELECT * FROM login WHERE username='$username'";
        $query = mysqli_query($connect , $sql);
        $num_row = mysqli_num_rows($query) ;
        $insert = "INSERT INTO login (username , password) VALUES('$username' , '$pass')";
        if($num_row == 0){
           $add = mysqli_query($connect , $insert);
           if($add){
                echo "SIGUP SUCCESS";
           }
        }
        else {
           echo "SIGUP ERROR";
        }
       
        $connect->close();

    

?>