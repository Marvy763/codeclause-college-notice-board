<?php 

//session_start();

 header("location:notes_crud.php");

 $connection = mysqli_connect('localhost','root','');

 $db = mysqli_select_db($connection,'college');

 $table = 'notes';

 $id = $_POST['id'];
 $title = $_POST['title'];
 $subject = $_POST['subject'];
 $date = date('Y-m-d H:i:s');
 
 if(isset($_POST['updatedata'])){

    $q= "update `$table` set title = '$title',subject='$subject',date_updated='$date' where id = '$id'";
    mysqli_query($connection,$q);


    //echo $title;
    echo"updated success";

 }else{
    echo "updated fail";
 }



 ?>