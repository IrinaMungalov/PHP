<?
    require 'data.php';
?>
<section>
    <h1>List of Tours:</h1>
    <ol>
        <? for ($i = 0; $i < count($tours); $i++) { ?>
            <li>
                <h2><?= $tours[$i]['name'] ?></h2>
                <img src="<?= $tours[$i]['image'] ?>" width="200">
                <p>
                    <strong>Destination:</strong>
                    <?= $tours[$i]['destination'] ?>
                </p>
                <p>
                    <strong>Duration:</strong>
                    <?= $tours[$i]['duration'] ?> days
                </p>
                <p>
                    <strong>Price:</strong>
                    <?= $tours[$i]['price']['amount'] ?>
                    <?= $tours[$i]['price']['currency'] ?>

                    <? if ($tours[$i]['hot']) { ?> 
                        <img src="<?= HOT_STICKER ?>" width="70">
                    <? } ?>
                </p>
                <hr>
            </li>
        <? } ?>
    </ol>
</section>