<? 
    include 'data.php';
    // HW2: what is the difference

    // include (всегда включает файл, даже если он уже был включен ранее)
    // include_once (проверяет, был ли файл включен ранее, и включает его только в случае отсутствия)
    // require (приводит к фатальной ошибке, если файл не найден, прекратит выполнение скрипта)
    // require_once (проверяет, был ли файл уже включен, и включает его только в случае необходимости)      

    //  HW3: add 2 links on top of catalog ^ - sort ascending  v - sort descending

    $sort = isset ($_GET['sort']) ? $_GET['sort'] : '';

    usort($products, $sort == 'asc' ? fn($p1, $p2) => $p1['price']['amount'] - $p2['price']['amount']
                                    : fn($p1, $p2) => $p2['price']['amount'] - $p1['price']['amount']);

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
    <h2>Sort by price: </h2>
    <a href="?sort=asc">▲</a> 
    <a href="?sort=desc">▼</a>
</div>

<ol>
    <?    
        $product_count_per_page = 3;
        $start_i = ($page - 1) * $product_count_per_page;
        $end_i = ($page * $product_count_per_page < count($products)) ? $page * $product_count_per_page : count($products);

        for ($i = $start_i; $i < $end_i; $i++) {
             $product = $products[$i]
    ?>

    <li>
        <h2>
            <?= $product['name'] ?>
            <? if ($product['new']) { ?> <img src="<?= NEW_STICKER ?>" width="50"> <? } ?>
        </h2>
        <h3>
            <?= $product['category'] ?>
        </h3>
        <img src="<?= $product['image'] ?>" width="200">
        <div>
            <?= $product['price']['amount'] ?>
            <?= $product['price']['currency'] ?>
        </div>
        <hr>
    </li>

    <? } ?>
        
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