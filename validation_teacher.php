<?php 

 session_start();

 $connection = mysqli_connect('localhost','root','');

 $db = mysqli_select_db($connection,'college');

 $table = 'teacher';

 $email = $_POST['email'];
 $pass = $_POST['password'];


 $q = "select * from `$table` where email = '$email' and pass = '$pass'";

 $result = mysqli_query($connection,$q);
 $fetch = mysqli_fetch_array($result);
 $num = mysqli_num_rows($result);

 if($num == 1){
    //echo"success";
    $_SESSION['id']= $fetch['id'];
    $_SESSION['name']= $fetch['name'];
    $_SESSION['job']= $fetch['job'];
    //echo $_SESSION['name'];
    $_SESSION['email']= $email;
    header("location:notes_crud.php");

 }else{

    echo "fail";
    
    header('location:login_teacher.php');
 }

 ?>