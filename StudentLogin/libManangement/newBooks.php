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
    <form action="./libIncludes/newBooks.inc.php" method="POST" enctype="multipart/form-data">
        <label for="bkTitle">Enter the book title</label><br>
        <input name="bkTitle" placeholder="Book Name"><br><br>
        <label for="catgy">Enter the book's cartegory</label><br>
        <input name="catgy" placeholder="Book Cartegory"><br><br>
        <label for="author">Enter book's author</label><br>
        <input name="author" placeholder="Author's Name"><br><br>
        <input type="file" name="file">
        <button type="submit" name="upload">Upload to Library Database</button>  
    </form>
    
    
    <?php
       /* if (isset($_SESSION[//!left this as blank])) {
            echo "Please fill up all the fields";
        };

        */
    ?>
</body>
</html>