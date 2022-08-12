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
    <link rel="stylesheet" href="./stylefiles/signupPHP.css">
</head>
<body>
    <nav>
        <a href="#logo">
            <img src="#logo" alt="logo image">
        </a>
        <div class="nav_bar"> 
            <img src="#" alt="universitylogo" class="Ulogo">
            <h1>University Library</h1>
            <nav class="top_nav">
                <ul>
                    <li><a href="index.php">Home/ Login</a></li>
                    <li><a href="#.php">Be A Guest</a></li>
                    <li><a href="#.php">About us</a></li>
                    <li><a href="#.php">contacts</a></li>
                </ul>
            </nav>
        </div>
        

        <?php
         if (isset($_SESSION['userId'])) {
            
            echo '<
            <div class=signedIn>
                <form action="./includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">logout</button>
                </form>
                <form action="./libManangement/student.php" method="post">
                <button type="submit" class="profile">get to account as student</button>
                </form>
            </div>
        ';   
                    

        }
        else {
            echo '
            <div class="mainContainer">
                <div class="childContainer studentLogin">
                    <p>login as Student</P><br>
                    <form action="./includes/login.inc.php" method="post">
                        <label for="mailuid">Enter your username. </label><br>
                        <input type="text" name="mailuid" placeholder="Username/Email"><br><br>
                        <label for="pwd">Enter your account password. </label><br>
                        <input type="password" name="pwd" placeholder="Password"><br><br><br>
                        <button type="submit" name="login-submit">login</button>
                    </form>
                    <p>You dont have an account?</p>
                    <button><a href="signup.php">signup</a></button>
                </div>

                <center><h1>-)> or <(-</h1><br></center>

                <div class="childContainer librarianLogin">
                    
                    <p>login as Librarian</p>

                    <form action="./libManangement/libIncludes/manLogin.inc.php" method="post">
                        <label for="mailuid">Enter the Librarian Key. </label><br>
                        <input type="text" name="mailuid" placeholder="LibraryID"><br><br>
                        <label for="pwd">Enter your account password. </label><br>
                        <input type="password" name="pwd" placeholder="Password"><br><br><br>
                        <button type="submit" name="login-librarian">login</button>
                    </form>
                </div>    
            </div>
        ';

        }
        ?>



        
    
        
    </nav>
</body>
</html>