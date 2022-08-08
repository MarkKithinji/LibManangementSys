<?php
$host= "localhost";
$user= "root";
$password = "";
$db="liblogin";


echo "yo bro! im in, woohoooo";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student login</title>
    <link rel="stylesheet" href="./libManangementstyling/login.css">
    <link rel="stylesheet" href="./libManangementstyling/managemnt.css">


</head>

<body>
    <div class="mainContainer">
        <div class="login_cont">
            <div class="student logo"></div>
            <div class="forms-cont">
                <div class="sign-in dialogue">
                    
                        <form action="login.php" method="get">
                            <label for="f_name">enter your first name<span class="warn">* field is required</span></label><br>
                            <input type="text" id="firstName" name="f_name" placeholder="First Name"><br>
                            <label for="s_name">enter your second name<span class="warn">* field is required</span></label><br>
                            <input type="text" id="secondName" name="s_name" placeholder="second name"><br>
                            <label for="LibCard">enter your main Library Card number<span class="warn">* keep this private</span></label><br>
                            <input type="password" id="libraryNum" name="LibCard" placeholder="Library Number"><br>
                         <!--   
                        <h5> Specify gender</h5>
                            
                            <div class="gender">
                                    
                                    
                                    <div class="male">
                                        <label for="male">Male</label><br>
                                        <input type="radio" id="maleSelect" name="Gender"><br>
                                    </div>
                                    <div class="male">
                                        <label for="female">Female</label><br>
                                        <input type="radio" id="femaleSelect" name="Gender"><br>
                                    </div>
                            </div>
-->
                            <button type="submit">log me in now</button>
                            <a href="signup.php">not signed up?</a>
                        </form>
                    
                </div>
               

            </div>
        </div>
</body>

</html>