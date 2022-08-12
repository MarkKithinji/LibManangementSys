<?php
    require "header.php";
?>
    <link rel="stylesheet" href="./stylefiles/signupPHP.css">
    <main>
        <section>
            
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfields") {
                    echo '<p class= "signupError">Fill up all the feilds !</p>';
                }
                if ($_GET['error'] == "invaliduid" && $_GET['error'] !== "emptyfields"); {
                    echo '<p class= "signupError">Invalid user ID !</p>';
                }
                if ($_GET['error'] == "invalidemail&uid" && $_GET['error'] !== "emptyfields"); {
                    echo '<p class= "signupError">Invalid user ID and Email !</p>';
                }
                if ($_GET['error'] == "invaliduid&uid" && $_GET['error'] !== "emptyfields"); {
                    echo '<p class= "signupError">passwords dont match!</p>';
                }
            }
            elseif ($_GET['signup'] == "success") {
                echo '<p class= "signupPass">Logged in successfully</p>';

            }

            ?>
            <div class="signup">
                <div class="childContainer librarianLogin">
                    <h3>signup</h3>
                    <form action="./includes/signup.inc.php" method="post">
                        <label for="uid">Enter your name</label><br>
                        <input type="text" name="uid" placeholder="username"><br><br>
                        <label for="uid">Enter your Email</label><br>
                        <input type="email" name="mail" placeholder="E-mail"><br><br>
                        <label for="uid">Choose a safe password</label><br>
                        <input type="password" name="pwd" placeholder="password"><br><br>
                        <label for="uid">Re-enter your password</label><br>
                        <input type="password" name="pwd-repeat" placeholder="repeat password"><br><br>
                        <button type="submit" name="signup-submit">signup</button><br><br>
                    </form>  
                    <form action="./includes/logout.inc.php" method="post">
                         <button type="submit">go back</button>
                    </form>
                   
                </div> 
            </div>
            

        </section>

    </main>

<?php
    require "footer.php";
?>