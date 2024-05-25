<?
    // match logic  

    if(empty($_GET) && empty($_POST)) {
        $new_match = true;
    } else {
        $new_match = false;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NEW MATCH</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

    <table class="match-table">
        <tr>
            <td colspan="2"><h1>NEW MATCH</h1></td>
        </tr>
        <tr>
            <td><h2>Player 1</h2></td>
            <td><h2>Player 2</h2></td>
        </tr>
        <tr>
            <td>
                <form action="/login-action.php" method="POST">
                    <input name="username" type="text" placeholder="username">
                    <input name="password" type="text" placeholder="password">
                    <p>no account ? <a href="/create-account.php">create one</a></p>
                    <button>ENTER</button>
                </form>
            </td>
            <td>
                <form action="/login-action.php" method="POST">
                    <input name="username" type="text" placeholder="username">
                    <input name="password" type="text" placeholder="password">
                    <p>no account ? <a href="/create-account.php">create one</a></p>
                    <button>ENTER</button>
                </form>
            </td>
        </tr>
        
    </table>
    
</body>
</html>