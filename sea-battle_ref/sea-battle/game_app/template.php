<!-- RENDER -->
<!-- HW1: render coordinates: horiz 1,2,3..., vert: a,b,c... -->
<!-- HW2: use a form > buttons 
     (одеть все в форму и сделать каждое из полей кнопочки 
     с отдельным неймом и при нажатии передасться именно 
     название той кнопки на кт пользователь нажал) -->


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

        <div class="map">
            <? for ($ri = 0; $ri < 10; $ri++) { ?>
                <? for ($ci = 0; $ci < 10; $ci++) { ?>
                    <?
                        $attributes = $map[$ri][$ci] == 1 ? 'class="ship sq"' : 'class="sq"';
                        $attributes .= "href=\"/?shoot={$ri}x{$ci}\""
                    ?>

                    <a <?= $attributes ?>></a>

                <? } ?>
            <? } ?>
        </div>

    </div>

</div>

