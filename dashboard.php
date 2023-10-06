<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
	<style>
		/* Reset some default browser styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-image: url("assets/images/icst.jpg");
    background-repeat:no-repeat; 
    background-size:cover;
    height: 100vh;
}

.login-container {
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: 350px;
}

.login-form {
    padding: 20px;
}

.login-form h2 {
    font-size: 24px;
    text-align: center;
    margin-bottom: 20px;
}

.input-container {
    display: flex;
    align-items: center;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 15px;
    padding: 10px;
}

.input-container i {
    margin-right: 10px;
    color: #555;
}

.input-container input {
    border: none;
    flex: 1;
    font-size: 16px;
    outline: none;
}

button {
    background-color: #007BFF;
    border: none;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    font-size: 16px;
    padding: 10px 0;
    width: 100%;
}

button:hover {
    background-color: #0056b3;
}

/* Responsive styles */
@media screen and (max-width: 480px) {
    .login-container {
        width: 90%;
    }
}

	</style>		
<body>
    <div class="login-container">
        <form class="login-form" action="#" method="post">
            <h2>Login</h2>
            <div class="input-container">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" required>
            </div>
            <div class="input-container">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
