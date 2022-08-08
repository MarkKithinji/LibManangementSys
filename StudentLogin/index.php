<?php
    require "header.php";
?>

    <main>
        <section>
            <?php

                if (isset($_SESSION['userId'])) {
                    echo "<p>you are logged in</p>";
                    

                }
                else {
                    echo "<p>you are logged out</p>";
                }

            ?>    
        </section>

    </main>

<?php
    require "footer.php";
?>