<!--    <?php 

  include("../utility/conn.php");
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../assets/css/general/reset.css">
     <link rel="stylesheet" href="../assets/css/admin/dash.css">
    <title>Dashboard</title>
</head>


<body>


<div class="contain">
    <div class="left">
        <input type="text">

        <button><a href="">Logout</a></button>
    </div>
</div>

<div class="container">
    <div class="header">
        <h1>Dashboard</h1>  
 </div>
< <div>         

    <footer class="bot">
      <h3>ICST Grading System</h3>
    </footer>
</div> 

</div>
</body>
</html> -->



<?php 
// session_start();

// if (!isset($_SESSION['username'])) {
// 	header("location:dashboard.php");
//}
// elseif ($_SESSION['user_type']=='admin') {
// 	header("location:login.php");
// }

// if (!isset($_SESSION['username'])) {
// 	header("location:login.php");
// } else {
// 	header("location:login.php");
// }
// var_dump(isset($_SESSION)); 
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="../assets/css/general/reset.css">
  <link rel="stylesheet" href="../assets/css/admin/dash.css">
	<title>
		Admin Dashboard
	</title>

	
</head>
<body>


	<header class="header">
		<a href="">Dashboard</a>

		<div class="logout"><a href="p_out.php">Logout</a></div>
	</header>

	<aside class="login-container">
		<ul class="sidebar">

			<li>
				<a href="">Teachers</a>
			</li>

			<li>
				<a href="">Subjects</a>
			</li>

			<li>
				<a href="">Class Records</a>
			</li>

			<li>
				<a href="">Grading Page</a>
			</li>

			<li>
				<a href="">Admin User Management</a>
			</li>

		</ul>
	</aside>

	<div class="contain">
		<h1>
			Welcome
		</h1>

		
	</div>
</body>
</html>