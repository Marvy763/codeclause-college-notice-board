<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register</title>

    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- animate css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <!-- external CSS stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
  <div class="toggle">
    <div class="toggle-tab">
      <a href="#" id="login-tab" class="tab">login</a>
      <a href="#" id="signup-tab" class="tab">Sign Up</a>
    </div>
    <div id="login">
      <form action="validation.php" class="form" method="POST">
        <div class="box-container">
          <i class="fas fa-at"></i>
        <input type="email" name="email" class="box" placeholder="email">
        </div>
        <div class="box-container">
          <i class="fas fa-lock"></i>
        <input type="password" name="password" class="box" placeholder="password"></div>
        <input type="submit" value="Login" class="btn">
      </form>
       <div class="mini-txt">are you teacher ? <a href="login_teacher.php">login here</a></div>
    </div>

    <div id="signup">
      <form action="registration.php" class="form" method="POST">
        <div class="box-container">
          <i class="fas fa-user"></i>
        <input type="text" name="name" class="box" placeholder="name"></div>
        <div class="box-container">
          <i class="fas fa-at"></i>
        <input type="email" name="email" class="box" placeholder="email">
        </div>
        <div class="box-container">
          <i class="fas fa-lock"></i>
        <input type="password" name="password" class="box" placeholder="password"></div>
        <input type="submit" value="Register" class="btn">
      </form>
    </div>
  </div>
</div>

<script type="text/javascript" src="js/toggle.js"></script>
</body>
</html>