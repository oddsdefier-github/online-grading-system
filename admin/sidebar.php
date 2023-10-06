<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="../assets/css/general/reset.css">
    <title></title>
</head>
<body>

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: 'Arial';
    text-decoration: none !important;
    outline: none;


}

.contain {
    float: right;
    width: 25%;
    height: 100%;
    position: relative;
    display: block;
    align-content: right;
    justify-content: justify;
    padding:50px 40px 30px;
    color: white;
    font-family: 'Arial';
    
}

.left input{
    height: 30px;
    width: 150px;
    font-size: 15px;
    font-weight: 500;
}

.left button{
    width: 100px;
    height: 30px;
    background-color: #006400;
    outline: none;
    border: 0;

.table {
  width: 65%;
  height: 100%;
  position: fixed;
  left: 30%;
     line-height: 30px;
  
 
}

.content{

  background-color: #006400;
  position: relative;
  left: 50%;
  top: 50%;
  height: 450px;
  width: 900px;
  padding: 50px 35px;
  transform: translate(-50%,-50%);
  border-radius: 10px;
  /*overflow: hidden;
  background-color: rgba(255, 255, 255, 0.13);
  backdrop-filter: blur(10px);
  border: 2px solid rgba(255, 255, 255, 0.1);
  box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);*/
  display: block;
  
}

.content table{
            border:1px solid black;
            padding: 10px;
            width: 100%;
            text-align: center;
            color: white;
        }
.content th,td{
            padding:5px;
            border:1px solid black;
        }
.content td a {
    text-decoration: none;
    color: white;
}


}
.left button a {
    text-decoration: none;
    font-size: 15px;
    font-weight: bold;
    color: white;
    
    
}

/* Basic styling for the sidebar */
.container {
    width: 25%;
    background-color: #006400;
    position: fixed;
    height: 100%;
    display: block;

}


.header h1{
    font-size: 40px;
    font-weight: 500;
    line-height: 50px;
    text-align: center;
    padding: 40px 20px;
    text-transform: uppercase;
    color: #fff;
    letter-spacing: 2px;

}


.sidebar a {
    position: relative;
    text-decoration: none;
    color: #fff;
    display: block;
    font-size: 25px;
    line-height: 30px;
    padding: 15px 40px;
    text-transform: uppercase;
}

.sidebar a:hover {
    cursor: pointer;
    background-color: white;
}


.table {
  width: 65%;
  height: 100%;
  position: fixed;
  left: 30%;
     line-height: 30px;
  
 
}

.content{

  background-color: #006400;
  position: relative;
  left: 50%;
  top: 50%;
  height: 450px;
  width: 900px;
  padding: 50px 35px;
  transform: translate(-50%,-50%);
  border-radius: 10px;
  /*overflow: hidden;
  background-color: rgba(255, 255, 255, 0.13);
  backdrop-filter: blur(10px);
  border: 2px solid rgba(255, 255, 255, 0.1);
  box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);*/
  display: block;
  
}

.content table{
            border:1px solid black;
            padding: 10px;
            width: 100%;
            text-align: center;
            color: white;
        }
.content th,td{
            padding:5px;
            border:1px solid black;
        }
.content td a {
    text-decoration: none;
    color: white;
}


.header {
    font-size: 24px;
    margin-bottom: 10px;
}

.bot {
    width: 25%;
    height: 100%;
    position: absolute;
    display: block;
    color: white;
    text-align: center;
    padding-top: 45%;
}
</style>
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
    
    <ul class="sidebar">
        <li><a href="">Teacher List</a></li>
        <li><a href="#">Class Record</a></li>
        <li><a href="#">Grading Page</a></li>
        <li><a href="#">User Management</a></li>
    </ul>
</div>
<div class="bot">

    <footer class="msg">
      ICST Grading System
    </footer>
</div>


 

</body>
</html> -->


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<div class="table">
    <div class="content">
        <table>
              <colgroup>
          <col width="5%">
          <col width="15%">
          <col width="10%">
          
          <!-- <col width="15%"> -->
          <!-- <col width="10%"> -->
          <!-- <col width="10%"> -->
          
        </colgroup>
        <tr>
            <th>ID</th>
            <th>Teacher Name</th>
            <th>Action</th>
            
        </tr>

        <tr>
        <?php
        $sql = "SELECT * FROM prof";
        $result = mysqli_query($data, $sql);
        $row = mysqli_num_rows($result);
        if($row > 0){
            while ($row = mysqli_fetch_assoc($result)) {
?>
                <tr>
                    <td><?php echo $row["Id"]; ?></td>
                    <td><?php echo $row["userName"]; ?></td>
                    <td><a href="">Edit</a>
                        <a href="">view</a>
                        <a href="">delete</a></td>
                
                    
                    
                    
                    

                </tr>
<?php
    }   
    }

 ?>
        </tr>

    
            
        </table>
    </div>

</body>
</html>