<?
require_once 'lib.php';

// 1. obtain form data
$username = $_POST['username'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];

// 2. check password confirmation
if($password != $password_confirm) {    
    header("Location: /create-account.php?message=". urlencode("password & confirmation do not match!"));
} else {
    // 3. save user data

    // HW1: check if the username is free / if not - redirect with message
    // HW2: check if the username has at least 3 symbols
    // HW3: check if the password has at least 3 symbols
    $existing_users[] = load_users();
    $existing_users[] = [
        "username" => $username,
        "password" => $password,
    ];
    save_users($existing_users);
}




?>