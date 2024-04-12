<?
$tours = load('tours');

if (isset($_POST['search'])) {
    $tours = array_filter($tours, function ($tour) {
        return
            !(stripos($tour['name'], $_POST['search']) === false)
            ||
            $_POST['search'] == '';
    });
}



if (isset($_POST['min_price']) && $_POST['min_price'] != '' && isset($_POST['max_price']) && $_POST['max_price'] != '') {

    $min_price = (int) $_POST['min_price'];
    $max_price = (int) $_POST['max_price'];

    $tours = array_filter($tours, function ($tour) use ($min_price, $max_price) {
        return $tour['price']['amount'] >= $min_price && $tour['price']['amount'] <= $max_price;
    });

} elseif (isset($_POST['min_price']) && $_POST['min_price'] != '') {
    
    $min_price = (int) $_POST['min_price'];
    $tours = array_filter($tours, function ($tour) use ($min_price) {
        return $tour['price']['amount'] >= $min_price;
    });
    
} elseif (isset($_POST['max_price']) && $_POST['max_price'] != '') {
    
    $max_price = (int) $_POST['max_price'];
    $tours = array_filter($tours, function ($tour) use ($max_price) {
        return $tour['price']['amount'] <= $max_price;
    });
}




if (isset($_POST['sort_desc'])) {
    usort($tours, function($tour_a, $tour_b){
        return $tour_b['price']['amount'] - $tour_a['price']['amount'];
    });
}

if (isset($_POST['sort_asc'])) {
    usort($tours, function ($tour_a, $tour_b) {
        return $tour_a['price']['amount'] - $tour_b['price']['amount'];
    });
}

$tours = array_values($tours);
?>

<section>
    <h1>List of Tours:</h1>

    <!-- FILTERS -->
    <form action="/?page=tours" method="POST">
        <fieldset>
            <legend>name</legend>
            <input name="search" type="text" placeholder="enter keywords ..." value="<?= $_POST['search'] ?? '' ?>">
        </fieldset>
        <fieldset>
            <legend>pricing</legend>
            <input name="min_price" type="number" placeholder="enter min price..." value="<?= $_POST['min_price'] ?? '' ?>">
            <input name="max_price" type="number" placeholder="enter max price..." value="<?= $_POST['max_price'] ?? '' ?>">
        </fieldset>
        <button>SEARCH</button>
        <!-- HW2: what if we'd use radio switcher instead of buttons -->
        <fieldset>
            <legend>sort</legend>            
            <label>
                <input type="radio" name="sort_desc" onchange="document.querySelector('form').submit()" <?= isset($_POST['sort_desc']) ? 'checked' : '' ?>>
                Descending
            </label>
            <label>
                <input type="radio" name="sort_asc" onchange="document.querySelector('form').submit()" <?= isset($_POST['sort_asc']) ? 'checked' : '' ?>>
                Ascending
            </label>  
            <!-- <button name="sort_desc">v</button>
            <button name="sort_asc">^</button> -->
        </fieldset>
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