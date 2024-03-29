<?
    include 'data.php';
?>
<section>
    <h1>List of Tours:</h1>
    <ol>
        <? 
            $tourCount = count($tourData);

            for ($i = 0; $i < $tourCount; $i++) {
                $tour = $tourData[$i]
        ?>
            <li>
                <h2>
                    <?= $tour['name'] ?>
                </h2>
                <img src="<?= $tour['image'] ?>" width="200">
                <p>
                    <strong>Destination:</strong>
                    <?= $tour['destination'] ?>
                </p>
                <p>
                    <strong>Duration:</strong>
                    <?= $tour['duration'] ?> days
                </p>
                <p>
                    <strong>Price:</strong> €
                    <?= $tour['price'] ?>

                    <? if ($tour['hot']) { ?> 
                        <img src="<?= HOT_STICKER ?>" width="70">
                    <? } ?>
                </p>
                
            </li>
        <? } ?>
    </ol>
</section>