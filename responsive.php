<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sidebar and Header</title>
    <style>
        /* Reset some default styles */
        body, html {
            margin: 0;
            padding: 0;
        }

        /* Sidebar styles */
        .sidebar {
            height: 100%;
            width: 300px;
            position: fixed;
            top: 0;
            left: -300px;
            background-color: #006400;
            overflow-x: hidden;
            transition: 0.5s;
           
        }

        .sidebar.open {
            left: 0;
        } 

/*.sidebar .closebtn {
  position: absolute;
  top: 5px;
  right: 5px;
  font-size: 60px;
  cursor: pointer;
}

.sidebar .closebtn:hover
{
  color: red;
}*/

        .sidebar .logo {
            text-align: center;
            padding: 20px;
            color: #fff;
            font-size: 40px;

        }
        .logo a {
            text-decoration: none !important;
            color: white;

        }

        .sidebar ul {
            list-style: none;
            padding: 0;
            font-size: 25px;
        }

        .sidebar ul li {
            padding: 15px;
            text-align: left;
            border-bottom: 2px solid black;

        }

        .sidebar ul li a {
            text-decoration: none;
            color: #fff;
            display: block;
            padding: 5px;
        }

         .sidebar li a:hover{
            background-color: white;
            color: black;

        }

        /* Header styles */
        .header {
            background-color: blue;
            padding: 20px;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: 'Times New Roman';
        }

       

        .header .menu-icon {
            font-size: 24px;
            cursor: pointer;
        }

        /* Content styles */
        .content {
            margin-left: 300px;
            padding: 20px;
        }

        /* Search and Logout */
        .search-logout {
            display: flex;
            align-items: center;
        }

        .search-input {
            margin-right: 20px;
            padding: 5px;
            border: none;
            border-radius: 10px;
            text-align: center;
            height: 20px;
            font-size: 15px;
            font-family: 'Times New Roman';
            font-weight: 800;
            outline: none;

        }

        .logout {
            font-family: 'Times New Roman';
/*          background-color: #f44336;*/
            color: #fff;
            border: none;
            border-radius: 5px;
            padding-top: -5px;
            cursor: pointer;
            height: 30px;
            width: 100px;
          
            font-weight: 800;

        }
         .logout a{
            text-decoration: none;
             color: #fff;
             
             font-size: 30px;
             

        }
    </style>
</head>
<body>
    <div class="sidebar" id="sidebar">
        <!-- <a  class="closebtn"onclick="toggleClose()" >&times;</a> -->
        <div class="logo"><a href="dash.php">Dashboard</a></div>
        <ul>
            <li><a href="#">Teacher</a></li>
            <li><a href="#">Subjects</a></li>
            <li><a href="#">Class Record</a></li>
            <li><a href="#">Grading page</a></li>
            <!-- <li><a href="#">User Management</a></li> -->
        </ul>
    </div>

    <div class="header">
        
        <div class="menu-icon" onclick="toggleSidebar()">☰</div>
        <div class="search-logout">
            <input type="text" class="search-input" placeholder="Search...">
            <div class="logout"><a href="p_out.php">Logout</a></div>
        </div>
    </div>

    <div class="content">
        <h1>Welcome to Your Dashboard</h1>
        <p>This is the main content area.</p>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("open");
        }

       
    //     $(document).ready(function(){
    //     $(".btn-toggle").click(function(){
    //     $(".modal").fadeToggle("fast");
    //     })
    // });
    //     $(document).ready(function(){
    //     $("#exampleModalLabel").click(function(){
    //     $(".modal").fadeToggle("fast");
    //     })
    // });

    //     $(document).ready(function(){
    //     $(".closebtn").click(function(){
    //     $(".modal").fadeToggle("fast");
    //     })
    // });
    </script>
</body>
</html>
