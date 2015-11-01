<?php 
    function user_exists($email){ 
        // Add security for SQL & SCRIPT INJECTION.
        $email = sanitize($email);
        // query db for email entered ~~~ Also could make these two lines one line but nah
        $query = mysql_query("SELECT COUNT(user_id) FROM users WHERE email = '$email'");
        //TERENARY OPERATOR
        return (mysql_result($query, 0) == 1) ? true : false;
    }

    function user_active($email){ 
        // Add security for SQL & SCRIPT INJECTION.
        $email = sanitize($email);
        // query db for email entered ~~~ Also could make these two lines one line but nah
        $query = mysql_query("SELECT COUNT(user_id) FROM users WHERE email = '$email' AND  activate = 1");
        //TERENARY OPERATOR
        return (mysql_result($query, 0) == 1) ? true : false;
    }

    function user_id_from_username($email) {
        $email = sanitize($email);
        return mysql_result(mysql_query("SELECT user_id FROM users WHERE email = '$email'"), 0, 'user_id');
    }

    function login($email, $password){
        $email = user_id_from_username($email);
        
        $email = sanitize($email);
        $password = MD5($password);
        
        return (mysql_result(mysql_query("SELECT COUNT(user_id) FROM users WHERE email = '$email' AND password = '$password'"), 0) == 1) ? $user_id : false;
    }
?>