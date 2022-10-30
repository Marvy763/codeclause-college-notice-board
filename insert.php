<?php 

//session_start();

 header("location:notes_crud.php");

 $connection = mysqli_connect('localhost','root','');

 $db = mysqli_select_db($connection,'college');

 $table = 'notes';

 $title = $_POST['title'];
 $subject = $_POST['subject'];
 $author = $_POST['teacher_id'];
 $date = date('Y-m-d H:i:s');
 
 if(isset($_POST['insertdata'])){

    $q= "insert into `$table` (title,subject,date_created,date_updated,author) values ('$title','$subject','$date','$date','$author')";
    mysqli_query($connection,$q);

    echo"inserted success";

 }else{
    echo "inserted fail";
 }



 ?>