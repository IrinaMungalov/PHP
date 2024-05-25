<? require_once 'lib.php' ?>

<? 
    $map_ship = load_map('map_ship');
    $map_state = load_map('map_state');
?>
<? // $coords = get_coords($_GET) ?>
<? // $map = shoot($map,$coords) ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SEA BATTLE GAME</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container">
        <table class="navbar">
            <tr>
                <td><h2>SEA BATTLE</h2></td>
                <td><a href="/match.php">NEW MATCH</a></td>
            </tr>
        </table>
    </div>
</body>
</html>
<? // save_map($map) ?>