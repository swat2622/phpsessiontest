<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="POST">

     Enter Name : <input type="text" name="name1" value="" >
     Enter Password : <input type="password" name="pass" value="">
     <button type="submit" name="login" value="">Login</button>
    </form>
    <?php
    session_start();
    if(isset($_SESSION['login'])){
        header("location:login.php");
    }


?>





</body>
</html>