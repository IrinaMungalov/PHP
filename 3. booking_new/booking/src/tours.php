<?
$tours = load('tours');

if (isset($_POST['search'])) {
    $tours = array_filter($tours, function ($tour) {
        return
            similar_text($tour['name'], $_POST['search']) >= 3
            ||
            $_POST['search'] == '';
    });
}

if (isset($_POST['min_price']) && isset($_POST['max_price'])) {
    
    $min_price = (int)$_POST['min_price'];
    $max_price = (int)$_POST['max_price'];

    $tours = array_filter($tours, function ($tour) use ($min_price, $max_price) {
        return $tour['price']['amount'] >= $min_price && $tour['price']['amount'] <= $max_price;
    });
}

$tours = array_values($tours);
?>

<section>
    <h1>List of Tours:</h1>

    <!-- FILTERS -->
    <form action="/?page=tours" method="POST">
        <input name="search" type="text" placeholder="enter keywords ..." value="<?= $_POST['search'] ?? '' ?>">
        <button>SEARCH</button>
    </form>

    <!--
        HW1:
            ADD ANOTHER FORM
                input: min_price
                input: max_price
    -->

    <form action="/?page=tours" method="POST">
        <input name="min_price" type="number" placeholder="enter min price..." value="<?= $_POST['min_price'] ?? '' ?>">
        <input name="max_price" type="number" placeholder="enter max price..." value="<?= $_POST['max_price'] ?? '' ?>">
        <button>SORT</button>
    </form>

    <!-- FILTERS -->

    <ol>
        <? for ($i = 0; $i < count($tours); $i++) { ?>
            <li>
                <h2>
                    <?= $tours[$i]['name'] ?>
                </h2>
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
                </p>
                <hr>
            </li>
        <? } ?>
    </ol>
</section>