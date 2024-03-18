<? 
    include 'data.php';
    // HW2: what is the difference

    // include (всегда включает файл, даже если он уже был включен ранее)
    // include_once (проверяет, был ли файл включен ранее, и включает его только в случае отсутствия)
    // require (приводит к фатальной ошибке, если файл не найден, прекратит выполнение скрипта)
    // require_once (проверяет, был ли файл уже включен, и включает его только в случае необходимости)  
    

    //  HW3: add 2 links on top of catalog ^ - sort ascending  v - sort descending

    if (isset ($_GET['sort'])) {
        $sort = $_GET['sort'];
    } else {
        $sort = ''; 
    }

    if ($sort == 'asc') {
        usort($products, fn($p1, $p2) => $p1['price']['amount'] - $p2['price']['amount']);
    } else if ($sort == 'desc') {
        usort($products, fn($p1, $p2) => $p2['price']['amount'] - $p1['price']['amount']);
    }

?>


<!-- TEMPLATE -->
<style>
    body { background-color: #333; color: white; text-align: center; }
    .container { display: flex; align-items: center; justify-content: center; }
    a { color: #ccc; text-decoration: none; padding: 3px; }
    a.active { text-decoration: underline; color: white; }
    .hidden { display: none; }
    li { list-style-type: none; }
</style>

<div class="container">
    <h2>Sorting: </h2>
    <a href="?sort=asc">▲</a> 
    <a href="?sort=desc">▼</a>
</div>

<ol>
    <?
    
    if ($page == 1) {

        for ($i = 0; $i < 3 ; $i++) { ?>
            <li>
                <h2>
                    <?= $products[$i]['name'] ?>
                    <? if($products[$i]['new']) { ?> <img src="<?=NEW_STICKER ?>" width="50"> <? } ?>
                </h2>
                <h3>
                    <?= $products[$i]['category'] ?>
                </h3>
                <img src="<?= $products[$i]['image'] ?>" width="200">
                <div>
                    <?= $products[$i]['price']['amount'] ?>
                    <?= $products[$i]['price']['currency'] ?>
                </div>
                <hr>
            </li>
        <?
        }

    } else {
        
        for ($i = 3; $i < 6; $i++) { ?>
            <li>
                <h2>
                    <?= $products[$i]['name'] ?>
                </h2>
                <h3>
                    <?= $products[$i]['category'] ?>
                </h3>
                <img src="<?= $products[$i]['image'] ?>" width="200">
                <div>
                    <?= $products[$i]['price']['amount'] ?>
                    <?= $products[$i]['price']['currency'] ?>
                </div>
                <hr>
            </li>
        <?
        }

    }
    ?>
    
</ol>

<div class="container">
    
    <a href="?p=<?= $prev_page ?>&sort=<?= $sort ?>"
        <? if ($page == 1)
            print 'class="hidden"' ?>
    >◀</a>

    <? for ($i = 1; $i <= $max_p; $i++) { ?>
        <a href="?p=<?= $i ?>&sort=<?= $sort ?>"
            <? if ($page == $i)
              print 'class="active"' ?>
        ><?= $i ?></a>
    <? } ?>

    <a href="?p=<?= $next_page ?>&sort=<?= $sort ?>"
        <? if ($page == $max_p)
            print 'class="hidden"' ?>
    >▶</a>

</div>