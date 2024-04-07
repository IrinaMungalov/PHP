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

    $tours = array_values($tours);
?>

<section>
    <h1>List of Tours:</h1>

    <!-- FILTERS -->
    <form action="/?page=tours" method="POST">
        <input 
            name="search" 
            type="text" 
            placeholder="enter keywords ..."
            value="<?= $_POST['search'] ?? '' ?>"
        >
        <button>SEARCH</button>
    </form>

    <!--
        HW1:
            ADD ANOTHER FORM
                input: min_price
                input: max_price
    -->

    <!-- FILTERS -->

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
                </p>
                <hr>
            </li>
        <? } ?>
    </ol>
</section>