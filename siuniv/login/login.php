<?php
    include '../connect.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "" || $password == ""){
        header("location: form-login.php");
    }
    else{
        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $result = mysql_query($connect, $query);

        $num = mysqli_num_rows($result);
    }
    if($num == 1){
        header("location: ../dosen/read.php");
    }
    else{
        header("location: form-login.php");
    }
?>