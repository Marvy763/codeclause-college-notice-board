<?php 

session_start();
// to prevent type this page link without login
if(!isset($_SESSION['email'])){
  header('location:login_stu.php');
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Notes</title>

     <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- external CSS stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="quiz">
  
  <div class="header">
    <div class="title">Welcome, <?php echo $_SESSION['name']; ?></div>
    <div class="box">
    <?php  
    if($_SESSION['job']=='teacher'){

    echo '<a href="#popup" class="btn">Add Note</a>';
    }
    ?>
    <a href="logout.php" class="btn logout">log out</a>
    </div>
  </div>
  <section class="grid">
  

<?php 

     $connection = mysqli_connect('localhost','root','');

     $db = mysqli_select_db($connection,'college');

  ?>
<?php
   if($_SESSION['job']=='teacher'){
    $id = $_SESSION['id'];


    $q = "select teacher.name ,notes.id, notes.title, notes.subject, notes.date_updated from teacher,notes where teacher.id = '$id' ";

    $result = mysqli_query($connection,$q);
    if($result){

      foreach ($result as $row) {
?>
    <div class="box">
      <div class="id" style="display: none;"><?php echo $row["id"];?></div>
      <div class="title"><?php echo $row["title"];?></div>
      <div class="info">
        <div class="icon">
        <i class="fas fa-calendar"></i>
        <p><?php echo $row["date_updated"]; ?></p></div>
        <div class="icon">
          <i class="fas fa-user"></i>
        <p><?php echo $row["name"]; ?></p></div>
      </div>
      <p class="subject"><?php echo $row["subject"]; ?></p>
      <?php 
        if($_SESSION['job']=='teacher'){
          echo '

          <div class="action">
                  <a href="#popup2">
                  <button class="editbtn">
                  <i class="fas fa-pen"></i></button></a>
                  <a href="#popup3">
                  <button class="deletebtn">
                  <i class="fas fa-trash"></i></button></a>
          </div>  

          ';

      } 
      ?>
      
    </div>
<?php
      }

    }else{
      echo 'no record found';
    }
?>


<?php
   }else{

    $q= 'select teacher.name , notes.title, notes.subject, notes.date_updated from teacher,notes';

    $result = mysqli_query($connection,$q);
    if($result){

      foreach ($result as $row) {
?>

    <div class="box">
      <div class="title"><?php echo $row["title"];?></div>
      <div class="info">
        <div class="icon">
        <i class="fas fa-calendar"></i>
        <p class="cal"><?php echo $row["date_updated"]; ?></p></div>
        <div class="icon">
          <i class="fas fa-user"></i>
        <p class="author"><?php echo $row["name"]; ?></p></div>
      </div>
      <p><?php echo $row["subject"]; ?></p>
      
    </div>
    
    
   <?php
      }

    }else{
      echo 'no record found';
    }
   }
     

?>
    
  </section>
  <!-- add note -->
  <div id="popup" class="popup">
   <a href="#" class="close">&times;</a>
  <form action="insert.php" method="POST" class="box-container">
    <input type="text" name="title" class="box" placeholder="title" required>
    <textarea cols="30" rows="10" name="subject" class="box" placeholder="write your notes here" required></textarea>
    <input type="hidden" name="teacher_id" value= <?php echo $_SESSION['id'] ?>>
    <input type="submit" name="insertdata" value="save" class="btn">
  </form>
  </div>
  <a href="#" class="close-popup"></a>


<!-- edit note -->
<div id="popup2" class="popup">
   <a href="#" class="close">&times;</a>
  <form action="update.php" method="POST" class="box-container">
    <input type="text" name="title" id="notes_title" class="box" placeholder="title" required>
    <textarea cols="30" rows="10" name="subject" id="notes_subject" class="box" placeholder="write your notes here" required></textarea>
    <input type="hidden" name="id" id="update_id">
    <input type="submit" name="updatedata" value="edit and save" class="btn">
  </form>
  </div>
  <a href="#" class="close-popup"></a>


  <!-- delete note -->
  <div id="popup3" class="popup">
<!--      <a href="#" class="close">&times;</a> -->
     <h3>Are you Sure to delete this note ?</h3>
    <form action="delete.php" method="POST" class="box-container msg">
      <input type="hidden" name="id" id="delete_id">
      <input type="submit" name="deletedata" value="confirm" class="btn delete">
      <a href="#" class="close gray btn">Cancel</a>
    </form>
  </div>
  <a href="#" class="close-popup"></a>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  // edit note
$(document).ready(function(){

  $('.editbtn').on('click',function () {
    
    $row = $(this).closest('section .box');

    var id = $row.children('.id').text();
    var title = $row.children('.title').text();
    var subject = $row.children('.subject').text();
    
    console.log(id);
    console.log(title);
    console.log(subject);

    $('#update_id').val(id);
    $('#notes_title').val(title);
    $('#notes_subject').val(subject);

  });


});


</script>


<script>
  // delete note
$(document).ready(function(){

  $('.deletebtn').on('click',function () {
    
    $row = $(this).closest('section .box');

    var id = $row.children('.id').text();
    
    console.log(id);

    $('#delete_id').val(id);


  });


});


</script>


</body>
</html>