<?
    function register($username, $email, $password) {

        // HW2: 
        //   try to use if/else conditional in a different maner
        //   hint: inversion, return

        if  (!search($username)) {         
                $user = [
                    $username,
                    $email,
                    $password,
                    true,
                    0.0
                ];                   

                $fp = fopen('./data/users.csv', 'a');
                fputcsv(
                    $fp,
                    $user
                );
                fclose($fp);
        } else {
            print ('ERROR: the username is taken');
        }

    }
    function unregister($username) {

    }
    function authenticate($username, $password) {
        // HW3: make the authentication
        // hint: search the user by username + password
        //       returns either user array, or false

        $fp = fopen('./data/users.csv', 'r');

        while (true) {
            $user = fgetcsv($fp);
            if ($user === false) {
                fclose($fp);

                return false;
            }

            if ($user[0] === $username && $user[2] === $password) {
                fclose($fp);

                return $user;
            }
        }

    }
    function login($username) {

    }
    function logout($username) {

    }

    // helpers
    function search($username) {
        $fp = fopen('./data/users.csv', 'r');

        while (true) {
            // no block scoped variables !!!
            $user = fgetcsv($fp);
            if($user === false || $user[0] === $username) 
                break;          
        }         

        fclose($fp);

        return $user;
    }
?>