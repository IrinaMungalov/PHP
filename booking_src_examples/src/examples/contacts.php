<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contacts</title>
</head>

<body>

    <h1>Contact Information</h1>
    <?    
    $city = "Houston";
    $street = "13 Travis Street";
    $phone = "+442086128000";
    $email = "contact@booking.com";
    $businessHours = "Open 24 Hours a day, 7 days a week";
    $website = "https://www.booking.com/";
    ?>

    <h2>You can find us at the following address:</h2>
    <p><b>City:</b>
        <?= $city; ?>
        <br>
        <b>Street:</b>
        <?= $street; ?>
    </p>

    <h3>Contact Details:</h3>
    <p><b>Phone Number:</b>
        <?= $phone; ?>
        <br>
        <b>Email:</b>
        <a href="<?= $email; ?>">
            <?= $email; ?>
        </a>
    </p>

    <h3>Business Hours:</h3>
    <p>
        <?= $businessHours; ?>
    </p>

    <h3>Website:</h3>
    <p>
        <a href="index.php">
            <?= $website; ?>
        </a>
    </p>
</body>

</html>