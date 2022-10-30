<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Login</title>

    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- external CSS stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container-1">
  <div class="login">
    <h2 class="heading">login</h2>
    <form action="validation_teacher.php" method="POST">
      <div class="label">
        <i class="fas fa-at"></i>
        <input type="email" name="email" placeholder="e-mail">
      </div>
      
      <div class="label">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="password">
      </div>
      
      <input type="submit" class="btn" value="login">
    </form>
       <div class="mini-txt">are you student ? <a href="login_stu.php">login here</a></div>
  </div>
</div>
</body>
</html>