<?
    $id = $_GET['id'];
    $tours = load('tours');
    // HW1: find the tour by ID
    //      a) array function, b) for + if
    //      and print its name in h2

    $tour = array_filter($tours, function ($tour) use ($id) {
            return $tour['id'] == $id;
    });
        $tourName = reset($tour)['name'];


/*

   foreach ($tours as $tour) {
        if ($tour['id'] == $id) {
            $tourName = $tour['name'];
            break;
        }
    }
type="hidden"
*/
?>

<hr>
<form action="/?page=order&id=<?= $id ?>" method="POST">
    <h2>You are about to book the tour '<?= $tourName ?>'</h2>
    <input  name="tour_id" value="<?= $id ?>">  

    <label>
        <select name="quantity">
            <option value="1">1 Seat</option>
            <option value="2">2 Seats</option>
            <option value="3">3 Seats</option>
        </select>
    </label>
    <br>
    <label>
        <input type="text" name="full_name" placeholder="your Full Name">
    </label>
    <br>
    <label>
        <input type="text" name="email" placeholder="your email address">
    </label>
    <br>
    <label>
        <input type="text" name="phone_number" placeholder="your phone number">
    </label>
    <br>
    <button>BOOK</button>
</form>

  