<?php

include "koneksi.php";

if($_POST){
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $password= $_POST['password'];
    
    $sql = "insert into account (nama, email, password) values ('".$nama."', '".$email."', '".md5($password)."');
    ";

    $result=mysqli_query($conn, $sql);
    if($result){
        echo "<script>location.href='login.php'</script>";
    }else{
        printf('Failed sign up: ' . mysqli_error($conn));
    }
}
?>