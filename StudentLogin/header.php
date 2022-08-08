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
    <nav>
        <a href="#logo">
            <img src="#logo" alt="logo image">
        </a>
        <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="#.php">portfolio</a></li>
            <li><a href="#.php">About me</a></li>
            <li><a href="#.php">contacts</a></li>
        </ul>
        

        <?php
         if (isset($_SESSION['userId'])) {
            echo '<form action="./includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit">logout</button>
        </form>';           

        }
        else {
            echo ' <form action="./includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="Username/Email">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="login-submit">login</button>
        </form>
        <a href="signup.php">signup</a>';
        }
        ?>

           
        
    
        
    </nav>
</body>
</html>