<?php 

//session_start();

 header("location:notes_crud.php");

 $connection = mysqli_connect('localhost','root','');

 $db = mysqli_select_db($connection,'college');

 $table = 'notes';

 $id = $_POST['id'];
 
 if(isset($_POST['deletedata'])){

    $q= "delete from `$table` where id = '$id'";
    mysqli_query($connection,$q);


    //echo $title;
    echo"delete success";

 }else{
    echo "delete fail";
 }



 ?>