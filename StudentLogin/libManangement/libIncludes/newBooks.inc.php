<?php 

    
    require "dbh.inc.php";

    $bookName = $_POST["bkTitle"];
    $cartegory = $_POST["catgy"];
    $author = $_POST["author"];

    if (empty($bookName) || empty($cartegory) || empty($author)) {
       header("location: ./newBooks.err.html?error=invaliduid");
       exit;
       
    
    }
    else{
        $sql = "SELECT bookName FROM shelf WHERE bookName=?";
        $stmt = mysqli_stmt_init($conn);
        

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../title.html");
            exit;
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $bookName);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);

            if ($resultCheck > 0) {
                header("location: ./newBooks.err.html");
                exit;
            }
            else {
                $sql = "INSERT INTO shelf (bookName, cartegory, author) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                        header("location: ../student.php");
                        exit;
                }else{

                //!$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
                mysqli_stmt_bind_param($stmt, "sss", $bookName, $cartegory, $author);
                mysqli_stmt_execute($stmt);
                header("location: ../newBooks.php");
                
                mysqli_stmt_close($stmt);
                mysqli_close($conn);
                exit;
                
            }
        }

    }
   
}



    /*else {
        $sql = "INSERT INTO shelf (bookName, cartegory, author) VALUES(?, ?, ?)";
        $stmt= mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location../student.php");
            exit;
        }
        else {
            mysqli_stmt_bind_param($stmt, "sss", $bookName, $cartegory, $author)
        }
    }
    */