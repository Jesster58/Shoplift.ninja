<?php
      include 'core/init.php'
?>
    <!DOCTYPE html>
    <html lang="">

    <?php include 'core/includes/head.php' ?>

        <?php include 'header.php' ?>
            <?php  

    if(empty($_POST) === false){
        $email = $_POST['email'];
        $password = $_POST['password'];
        
            //Check if user exists
        if(empty($email) === true || empty($password) === true){
            $errors[] = 'You need to enter a email and password';
        } else if (user_exists($email) === false) {
            $errors[] = 'We cannot find that email. Have you registered?';
        } else if (user_active($email) === false){
            $errors[] = 'You haven\'t activated your account';
        } 
            // Passed first check
        else{
            // Try logging in user
            $login = login($email, $password);
            if ($login === false){
                $errors[] = 'That email and password combination is incorrect';
            } else{
                echo 'goody';
                // set user session
                    $_SESSION['user_id'] = $login;
                // redirect user home
                    header('Location: index.php');
                    exit();
            }
        }
        print_r($errors);
        //echo $login;
    }
?>