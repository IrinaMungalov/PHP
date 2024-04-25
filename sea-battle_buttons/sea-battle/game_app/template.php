<!-- RENDER -->

<div class="container">

    <div class="numbers">
        <?php for ($rn = 1; $rn <= 10; $rn++) { ?>
            <div class="number"><?= $rn ?></div>
        <?php } ?>
    </div>


    <div class="letter-field">

        <div class="letters"> 
            <?php foreach (range('A', 'J') as $letter) { ?>
                <div class="letter"><?= $letter ?></div>
            <?php } ?>
        </div>

        <form>
            <div class="map">
                <? for ($ri = 0; $ri < 10; $ri++) { ?>
                    <? for ($ci = 0; $ci < 10; $ci++) { ?>
                        <?
                            $attributes = $map[$ri][$ci] == 1 ? 'class="ship sq"' : 'class="sq"';
                        ?>

                        <button name="shoot" value="<?= "{$ri}x{$ci}" ?>" <?= $attributes ?> ></button>
                    <? } ?>
                <? } ?>
            </div>
        </form>
        
    </div>

</div>

