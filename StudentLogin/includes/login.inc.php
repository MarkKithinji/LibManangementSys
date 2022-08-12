<?php



if (isset($_POST['login-submit'])) {

    require 'dbh.inc.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if (empty($mailuid)  || empty($password)) {
        header("location: ../index.php?error=emptyfields");
        exit ();  
    }
    else{
        $sql = "SELECT * FROM users WHERE uidusers=? OR emailusers=?;"; 
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../index.php?error=sqlerror");
        exit (); 
        }
        
       else {
            mysqli_stmt_bind_param($stmt, 'ss', $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdcheck = password_verify($password, $row['pwdusers']);
                if ($pwdcheck == false) {
                    header("location: ../index.php?error=wrongpassword".$mailuid);
                        exit (); 
                }
                elseif ($pwdcheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['idusers'];
                    $_SESSION['userUid'] = $row['uidusers'];
                    header("location: ../libManangement/studentLayout.html?login=success".$mailuid);
                        exit (); 

                }
                else{
                    header("location: ../index.php?error=errorprocessingpassword".$mailuid);
                        exit (); 
                }
            }
            else{
                header("location: ../index.php?error=usernotfound".$mailuid);
        exit (); 
            }
        }
    }

}


else{    
        header("location: ../index.php?error=2sqlerror");
        exit ();    
}