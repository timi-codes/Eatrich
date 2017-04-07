<?php
include_once 'db_connect.php';
include_once 'psl-config.php';
include_once 'functions.php';

sec_session_start();

$error_msg = "";

if (isset($_POST['email'], $_POST['newpass'])) {
    // Sanitize and validate the data passed in
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg .= '<p class="error"  style="color:red; font-size:16px;">* The email address you entered is not valid</p>';
    }
 
    $password = filter_input(INPUT_POST, 'newpass', FILTER_SANITIZE_STRING);
   /* if (strlen($password) != 128) {
        // The hashed pwd should be 128 characters long.
        // If it's not, something really odd has happened
        $error_msg .= '<p class="error"  style="color:red; font-size:16px;>* Invalid password configuration.</p>';
    }*/
 
    // Username validity and password validity have been checked client side.
    // This should should be adequate as nobody gains any advantage from
    // breaking these rules.
    //
 
   $prep_stmt = "SELECT id FROM members WHERE email = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);

   // check existing email  
    if ($stmt) {
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->store_result();
 
        if ($stmt->num_rows == 0) {
            // A user with this email address already exists
            $error_msg .= '<p class="error"  style="color:red; font-size:16px;">* Invalid email .</p>';
                        $stmt->close();
        }
    } else {
        $error_msg .= '<p class="error"  style="color:red; font-size:16px;">* Database error Line 39</p>';
                $stmt->close();
        }


    // check existing username
    $prep_stmt = "SELECT id FROM members WHERE username = ? LIMIT 1";
    $stmt = $mysqli->prepare($prep_stmt);
 
    if ($stmt) {
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();
        $rs = $stmt->fetch();

                if ($stmt->num_rows == 1) {
                        $error_msg .= '<p class="error" style="color:red; font-size:16px;">* A user with this username already exists</p>';
                        $stmt->close();
                }
    } else {
        $error_msg .= '<p class="error"  style="color:red; font-size:16px;">* Database error line 55</p>';
        $stmt->close();
    }

        // TODO: 
        // We'll also have to account for the situation where the user doesn't have
        // rights to do registration, by checking what type of user is attempting to
        // perform the operation.
     
        if (empty($error_msg)) {
     
            // Create hashed password using the password_hash function.
            // This function salts it with a random salt and can be verified with
            // the password_verify function.
            //$passwords = password_hash($password, PASSWORD_BCRYPT);
           $password=$password."jke$@47827838@@##@#@#@(@)!*(#&#GB";
           $passwords = sha1($password);


     
           // Update member of member with the email 
            if ($insert_stmt = $mysqli->prepare('UPDATE members SET password = ? WHERE email="'.$_POST['email'].'"')){


                $insert_stmt->bind_param('s',$passwords);

                // Execute the prepared query.
                if (! $insert_stmt->execute()) {
                    header('Location: ../error.php?err=Update failure: INSERT');
                }else{
                    $error_msg .= '<p class="error" style="color:green; font-size:16px; margin-bottom: 5px;">* Your password was successfully updated </p>';
                }
            }
        }
} 
?>