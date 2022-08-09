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
        <div class="nav_bar">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#.php">Be A Guest</a></li>
                    <li><a href="#.php">About us</a></li>
                    <li><a href="#.php">contacts</a></li>
                </ul>
            </nav>
        </div>
        

        <?php
         if (isset($_SESSION['userId'])) {
            echo '<form action="./includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit">logout</button>
        </form>
        <form action="./libManangement/student.php" method="post">
        <button type="submit" class="profile">get to account as student</button>
        </form>
       
        ';   
                    

        }
        else {
            echo '
            
            <p>login as Student</P><br>
             <form action="./includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="Username/Email">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="login-submit">login</button>
        </form>
        <a href="signup.php">signup</a>
        
        <p>or</p><br>
        <p>login as Librarian</p>

        <form action="./libManangement/libIncludes/manLogin.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="LibraryID">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="login-librarian">login</button>
        </form>
        ';

        }
        ?>



        
    
        
    </nav>
</body>
</html>