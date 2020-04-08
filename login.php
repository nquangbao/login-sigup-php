<?php
    require_once('connect.php');
    if(!$connect){
        die('Connect failed: ' . mysql_connect_error);
    }
    echo "connection successfully ";
    
       
        $username = $_POST['user'];
        $pass = $_POST['password'];
       
        $sql = "SELECT * FROM login WHERE username='$username' and password='$pass'";
   
      
        $query = mysqli_query($connect , $sql);
        $num_row = mysqli_num_rows($query) ;
      

        $insert = "INSERT INTO login (username , password) VALUES('$username' , '$pass')";
        if($num_row == 0){
           echo 'LOGIN ERROR';
        }
        else {
           echo "LOGIN SUCCESS";
        }
       
        $connect->close();

    

?>