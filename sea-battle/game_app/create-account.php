<? require_once 'lib.php' ?>
<?
    $message = get_message($_GET);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CREATE ACCOUNT | SEA BATTLE GAME</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <div class="container">
        <h1>CREATE ACCOUNT | SEA BATTLE</h1>
        <? if ($message) { ?>
            <p class="error"><?=$message ?></p>
        <? } ?>
        <form action="/register-action.php" method="POST">
            <input name="username" type="text" placeholder="username">
            <input name="password" type="text" placeholder="password">
            <input name="password_confirm" type="text" placeholder="confirm password">
            <button>REGISTER</button>
        </form>
    </div>
</body>

</html>
