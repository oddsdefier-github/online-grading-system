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

<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/dash.css">
	<title>
		Dashboard
	</title>
	<style type="text/css">
		*{
	margin: 0px;
	padding: 0px;
}

.header{
	background-color: #006400;
	line-height: 70px;
	padding-left: 30px;
	font-size: 25px;
	color: white;


	
}


a, a:hover{
	text-decoration: none!important;
	color: white;

}

.logout{
	float: right;
	padding-right: 50px;
	color: white;


}

.sidebar{
	background-color: #fff;
	border-right: 2px solid black;
	font-size: 20px;

}
ul
{
	background-color: #fff;
	width: 16%;
	height: 100%;
	position: fixed;
	padding-top: 5%;
	padding-left: 10px;
	text-align: left;
}

ul li
{
	list-style: none;
	padding-bottom: 30px;
	font-size: 15px;
}
ul li a{
	color: black;
	font-weight: bold;
}

ul li a:hover{
	color: red;
	text-decoration: none;

}

.contain{
	margin-left: 20%;
	margin-top: 10px;
}



	</style>
</head>
<body>


	<header class="header">
		<a href="">Dashboard</a>

		<div class="logout"><a href="p_out.php">Logout</a></div>
	</header>

	<aside>
		<ul class="sidebar">

			<li>
				<a href="">Subjects</a>
			</li>

			<li>
				<a href="">Class Records</a>
			</li>

			<li>
				<a href="">Grading Page</a>
			</li>

			

		</ul>
	</aside>

	<div class="contain">
		<h1>
			Welcome
		</h1>

		
	</div>
</body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
	<style>
		/* Basic styles for desktop */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {

	float: right;
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
    display: flex;
}

.bar, .logout{
	position: relative;

		float: right;
			top: 20px;
			height: 25px;
			border-radius: 10px;
			outline: none !important;
			border: none;
			

}

nav {
    background-color: #444;
    color: #fff;
    padding: 10px;
}

main {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 20px;
}

.card {
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin: 10px;
    padding: 20px;
    width: calc(50% - 20px); /* Two columns on desktop */
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
}

/* Responsive styles for tablets */
@media screen and (max-width: 768px) {
    main {
        flex-direction: column; /* Stack cards on top of each other */
    }

    .card {
        width: calc(100% - 20px); /* Full width on tablets */
    }
}

/* Responsive styles for mobile devices */
@media screen and (max-width: 480px) {
    header {
        font-size: 24px;
    }
    
    nav {
        font-size: 16px;
        padding: 5px;
    }

    main {
        padding: 10px;
    }

    .card {
        width: calc(100% - 10px);
    }

    footer {
        font-size: 16px;
        padding: 5px;
    }
}

	</style>
<body>
    <header>
        <h1>Dashboard Title</h1>

        <input class="bar" type="text" placeholder="SEARCH">

		<div class="logout"><a href="p_out.php">Logout</a></div>
    </header>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </nav>
    <main>
        <section class="card">
            <h2>Chart 1</h2>
            <!-- Add your chart here -->
        </section>
        <section class="card">
            <h2>Chart 2</h2>
            <!-- Add another chart or content here -->
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Your Company</p>
    </footer>
</body>
</html>
