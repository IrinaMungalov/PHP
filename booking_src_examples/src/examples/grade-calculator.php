<?php

$grade1 = "";
$grade2 = "";
$grade3 = "";

// get values
if ( isset($_GET['grade1'], $_GET['grade2'], $_GET['grade3']) ) {
    $grade1 = $_GET['grade1'];
    $grade2 = $_GET['grade2'];
    $grade3 = $_GET['grade3'];

    // checking for emptiness
    if ( empty($grade1) || empty($grade2) || empty($grade3) ) {
        print "Fill in all three grade fields";
    } else {

        // checking the input for the range 0..10 and
        // checking the input for numbers (any - integers or fractions)
        if ( preg_match('/^(10|\d(\.\d)?)$/', $grade1) && preg_match('/^(10|\d(\.\d)?)$/', $grade2) && preg_match('/^(10|\d(\.\d)?)$/', $grade3) ) {
            $grade1 = (float)$grade1;
            $grade2 = (float)$grade2;
            $grade3 = (float)$grade3;

            $averageGrade = ($grade1 + $grade2 + $grade3) / 3;
            print "Average rating: " . number_format($averageGrade, 1);
        } else {
            print "Enter valid grades in the range 0 to 10.";
        }
    }
} else {
    print "Fill in all three grade fields.";
}

?>

<form  action="/examples/grade-calculator.php" method="GET">

    <label for="grade1">Grade 1:</label>
    <input 
        required
        type="number" 
        name="grade1" 
        step="0.1"><br>

    <label for="grade2">Grade 2:</label>
    <input 
        required
        type="number" 
        name="grade2" 
        step="0.1"><br>

    <label for="grade3">Grade 3:</label>
    <input 
        required
        type="number" 
        name="grade3" 
        step="0.1"><br>

    <button type="submit">SUBMIT</button>

</form>