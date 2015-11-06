<?php 
    // Function for taking unlimited parameters for user data...
    function user_data($user_id){
        // empty array for returning data
        $data = array();
        $user_id = (int)$user_id;
        
        // We have 7 args :D
        $func_num_args = func_num_args();
        $func_get_args = func_get_args();
        
        // remove user_id because not needed here
        if($func_num_args > 1){
            unset($func_get_args[0]);
            // This is imploding the args and adding ' so they can look like sql query.
               
            $fields = ''. implode(', ' , $func_get_args);
             // If you want to see uncomment the echo
                //echo $fields;
            // Check SQL statement
                //echo "SELECT $fields FROM users WHERE user_id = $user_id";
                //die();
            $data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM users WHERE user_id = $user_id"));
            // print_r($data); 
            // die();
            return $data;
        }
         
        //print_r($func_get_args);
    }
    

    function logged_in(){
        return(isset($_SESSION[user_id])) ? true : false;
    }

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
    function user_id_from_email($email) {
        $email = sanitize($email);
        return mysql_result(mysql_query("SELECT user_id FROM users WHERE email = '$email'"), 0, 'user_id');
    }

    function login($email, $password){
        $user_id = user_id_from_email($email);
        $email = sanitize($email);
        $password = MD5($password);
        
        return (mysql_result(mysql_query("SELECT COUNT(user_id) FROM users WHERE email = '$email' AND password = '$password'"), 0) == 1) ? $user_id : false;
    }
?>