<?php
include("conn.php");

if (isset($_POST['login'])) {
  $userName = $_POST['userName'];
  $passWord = $_POST['passWord'];
  $query = "SELECT * FROM prof WHERE userName ='{$userName}' and passWord = '{$passWord}'";

  $select_user_query = mysqli_query($data, $query);
  if (!$select_user_query) {
    echo "failed " . $query . mysqli_error($data);
  }
  while ($row = mysqli_fetch_array($select_user_query)) {

    $db_username = $row['userName'];
    $db_password = $row['passWord'];

    if ($db_username == $userName && $db_password == $passWord) {

      $_SESSION['User_Id'] = $row['Id'];
      $_SESSION['userName'] = $row['userName'];
      $_SESSION['passWord'] = $row['passWord'];

      header("Location:dash.php");
    } else {
      $_SESSION['alert'] = "0";
    }
  }
} else {
  $_SESSION['alert'] = "0";
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/general/reset.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Log In</title>
</head>

<body>
  <div class="bg-overlay"></div>
    <div class="relative">
        <div class="position-absolute z-10 top-5 start-0 container-fluid">
            <div class="d-block d-md-none d-flex justify-content-center align-items-center">
                <img class="w-25 p-2 mt-5" src="assets/images/logo_trans.png">
            </div>
        </div>
        <div class="container-fluid h-vh d-flex justify-content-center align-items-center" style="height: 100vh">
            <div class="w-75 w-md-50 d-flex justify-content-center align-items-center gap-5 container-md-fluid min-vh-100">
                <div class="logo-sm d-none d-md-block vh-100 z-3">
                    <img src="assets/images/logo_trans.png">
                </div>
                <div class="signin-main w-100 w-md-25">
                    <form class="signin p-4 rounded">
                        <h2 class="mb-3 fs-2 fw-bold">
                            Sign in
                        </h2>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" aria-describedby="username"
                                name="userName" autocomplete="off" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="passWord" autocomplete="off"
                                required>
                        </div>
                        <!-- <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> -->
                        <!-- <div>
                            <a href="teacher/page/forgot1.php">Forgot Password?</a>
                        </div> -->
                        <button type="submit" class="btn">Sign in</button>
                    </form>

                    <!-- <form class="signin_admin p-5 bg-white rounded" method="post">
                        <h2 class="form_title">
                            Login Here
                        </h2>
                        <div class="input-group">
                            <label>User name</label>
                            <input type="text" name="userName" autocomplete="off" required>
                            <span class="focus-input100"></span>
                        </div>
                        <div class="input-group">
                            <label>Password</label>
                            <input type="password" name="passWord" autocomplete="off" required>
                            <span class="focus-input100"></span>
                        </div>

                    </form> -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>