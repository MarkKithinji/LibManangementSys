<?php 
session_start();
include_once 'libIncludes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./libManangementstyling/manangementPHP.css">
</head>

<body>
    <h2>Available Titles</h2>
    <!--
        <div class="nav-bar">
        <div class="viewShelf">
            view shelf
        </div>
        <div class="addBook">
            add books
        </div>
        <div class="borrowed">
            borrowed books
        </div>
    </div>
    -->
   
    
    <div class="bookContainer">
        
            <?php

            $sql = "SELECT * FROM shelf;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        
                        echo '<div class="book-1 books">';
                        echo "Book Title :  " . $row["bookName"]."<br>";
                        echo "Book Cartegory :  " . $row['cartegory']."<br>";
                        echo "Authors :  " . $row['author'].'<br>';
                        
                        echo "</div>";
                        echo "<br><br><br><br>";

                    }
                }
            ?>
        </div>
    

    
    
        <!-- <div class="book-2 books">
            <?php

            // $sql = "SELECT * FROM shelf WHERE bookName = 'Ants';";
            // $result = mysqli_query($conn, $sql);
            // $resultCheck = mysqli_num_rows($result);
            //     if ($resultCheck > 0) {
            //         while ($row = mysqli_fetch_assoc($result)) {
                        
            //             echo "Book Title :  " . $row['bookName'].'<br>';
            //             echo "Book Cartegory :  " . $row['cartegory'].'<br>';
            //             echo "Authors :  " . $row['author'].'<br>';
                        
            //         }
            //     }
            ?>
        </div> -->
    </div>

</body>
</html>