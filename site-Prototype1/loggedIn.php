<?php  
    include 'core/init.php';
    
//   if(user_exists('spaegod@me.com') === true){
//       echo "exists";
//   }
//    else{
//        echo "New phone who dis?";
//    }
//   die();

    if(empty($_POST) === false){
        $email = $_POST['email'];
        $password = $_POST['password'];
        
            //Check if user exists
        if(empty($email) === true || empty($password) === true){
            $errors[] = 'You need to enter a username and password';
        } else if (user_exists($email) === false) {
            $errors[] = 'We cannot find that email. Have you registered?';
        } else if (user_active($email) === false){
            $errors[] = 'You haven\'t activated your account';
        } else{
                // try logging in user
            $login = login($email, $password);
            
            if ($login === false){
                $errors[] = 'That username and password combination is incorrect';
            } else{
                echo 'goody';
                // set user session
                // redirect user home
            }
        }
        
        print_r($errors);
        
        //echo $username . " " . $password;
    }
?>