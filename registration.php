<?php 

 session_start();
 header('location:login_stu.php');
 $connection = mysqli_connect('localhost','root','');

 $db = mysqli_select_db($connection,'college');

 $table = 'student';

 $user = $_POST['name'];
 $email = $_POST['email'];
 $pass = $_POST['password'];
 $job = "student";


 $q = "select * from `$table` where email = '$email'";

 $result = mysqli_query($connection,$q);
 $num = mysqli_num_rows($result);

 if($num == 1){
    echo "user already exists";
 }else{
    $reg = " insert into `$table` (name,email,password,job) values ('$user','$email','$pass','$job') ";
    mysqli_query($connection,$reg);
    echo "registration completed sucussefully";
 }

 ?>