<?php 
  include("../utility/conn.php");
  
 if (isset($_POST['login'])) {
    $userName = $_POST['userName'];
    $passWord = $_POST['passWord'];
  $query = "SELECT * FROM admin WHERE userName ='{$userName}' and passWord = '{$passWord}'";

    $select_user_query = mysqli_query($data, $query);
    if (!$select_user_query) {
    echo "failed " .$query. mysqli_error($data);
  }
     while ($row=mysqli_fetch_array($select_user_query)) {

        $db_username = $row['userName'];
        $db_password = $row['passWord'];

        if ($db_username == $userName && $db_password == $passWord) {

          $_SESSION['User_Id'] = $row['Id'];
          $_SESSION['userName'] = $row['userName'];
          $_SESSION['passWord'] = $row['passWord'];

          header("Location:dashboard.php");

     }else{
          $_SESSION['alert'] = "0";
     }
      
  }

}else{
    $_SESSION['alert'] = "0";
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/general/reset.css">
  <link rel="stylesheet" href="../assets/css/admin/style1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
   <title>Log In</title>
</head>
<body>
  <div class="sidebar">
    <ul>
      <img src="../assets/images/logo_trans.png">
    </ul>
  </div>

 <div class="container">

  <div class="login-content">

   <form class="login_admin" method="post" >
      <h2 class="b_title">Login Here</h2>
 
    <div>
      <label>User name</label>
      <input class="fa-solid fa-user-large" type="text" name="userName" autocomplete="off" required>
      <span class="focus-input100"></span>
    </div>

    <div>
      <label>Password</label>
      <input class="bi bi-eye-slash" type="text" name="passWord" autocomplete="off" required>
      <span class="focus-input100"></span>
    </div>

      <div>
        <form>
          <button class="submit100" type="submit" name="login">LOGIN</button>
        </form>

        <div>
          <label class="forp"><a href="page/forgot1.php">Forgot Password?</a></label></div>
      </div>

    </form>

   



    </div>
  </div>
</body>

<script>  
function toggleVisibility() {  
  var getPasword = document.getElementById("pswrd");  
  if (getPasword.type === "password") {  
    getPasword.type = "text";  
  } else {  
    getPasword.type = "password";  
  }  
}  
</script>  
</html>