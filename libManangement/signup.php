<?php
    $host= "localhost";
    $user= "root";
    $password= "";
    $db= "libSignup";


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
<div class="sign-up dialogue">
                    <form action="manangement.php" method="post">
                        <label for="f_name">enter your first name<span class="warn">* field is required</span></label><br>
                        <input type="text" id="firstName" name="f_name" placeholder="First Name" require><br>
                        <label for="s_name">enter your second name<span class="warn">* field is required</span></label><br>
                        <input type="text" id="secondName" name="s_name" placeholder="second name" require><br>
                        <label for="email">enter your main email address<span class="warn" require>* field is required</span></label><br>
                        <input type="text" id="Emailaddress" name="email" placeholder="email address"><br>
                        <label for="NatId">enter your main national Id<span class="warn" require>* field is required</span></label><br>
                        <input type="number" id="Id" name="NatId" placeholder="ID Number"><br>
                       <!--  <div class="gender">
                            <h5> Specify gender</h5>
                            <label for="male">Male</label><br>
                            <input type="radio" id="maleSelect" name="Gender"><br>
                            <label for="female">Female</label><br>
                            <input type="radio" id="femaleSelect" name="Gender"><br>

                        </div>
                        <h5>polite notice></h5><br>
                        <p>borrowing is not available for children under 18. parents should
                            responsible will pick on behalf and will be held accountable</p>
                        <select id="age select">

                            <option value="18-20">18-20</option>
                            <option value="21=30">21=30</option>
                            <option value="31-40">31-40</option>
                            <option value="41-50">41-50</option>
                            <option value="51-60">51-60</option>
                            <option value="61-70">61-70</option>
                            <option value="71-80">71-80</option>
                            <option value="81-90">81-90</option>
                            <option value="91-100">91-100</option>
                        </select><br> 
-->
                        <button id="submitt">Join the Community</button>
                    </form>
                    <button class="backToLogin">I have an Account</button>
                </div>    

</body>
</html>