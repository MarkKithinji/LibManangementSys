<?php
    require "header.php";
?>
    <link rel="stylesheet" href="./stylefiles/signupPHP.css">
    <main>
        <section>
            <h1>signup</h1>
            <form action="./includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="username">
                <input type="email" name="mail" placeholder="E-mail">
                <input type="password" name="pwd" placeholder="password">
                <input type="password" name="pwd-repeat" placeholder="repeat password">
                <button type="submit" name="signup-submit">signup</button>
            </form>   
            <form action="./includes/logout.inc.php" method="post">
                <button type="submit">go back</button>
            </form>

        </section>

    </main>

<?php
    require "footer.php";
?>