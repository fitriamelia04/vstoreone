<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VSTORE</title>
    <style>
        body{
            background-image: url(foto/sanemi.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            
        }
        
    </style> 
</head>
<body>


<?php
if(isset($_GET['error'])){
    echo $_GET['error'];
}
?> <br>
    <center><h1 style="color:white">VSTORE</h1>
    <form action="proses_login.php"method="post" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"><br>
    <div class="login" style="color:white">
    <div class="user">
        Username 
        <input type="text" name="username" style="border-radius: 5px;">
    </div>
    <div class="pass"><br>
        Password
        <input type="password" name="password" style="border-radius: 5px;">
    </div>
    <div class="log"><br>
        <input type="submit" name="login" value="Login" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; background-color:dimgray; border-radius:5px; color:white" >
    </div>
    </div>
    </form>
    </center>
</body>
</html>