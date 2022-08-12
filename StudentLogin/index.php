<?php
    require "header.php";
?>

    <main>
        <section>
            <?php

                if (isset($_SESSION['userId'])) {
                    echo "<center><p>you are logged in</p></center>";
                    

                }
                else {
                    echo "<center><p>you are logged out</p></center>";
                }

            ?>    
        </section>

    </main>

<?php
    require "footer.php";
?>