<!-- http://localhost/php-exercises/day3/challenge/challenge.php -->

<?php
// We will create a Restaurant Database (you can create it directly in php MyAdmin).

// The database should contain one table called dishes with columns dishID, image (URL link), name, price and meal description. If there are any columns that you think could compliment your project feel free to expand. 

// You should be able to:
// Display all meals. This page will show name, image and a "Show details" link for all meals in the database.
// Each meal will be linked to a details page specific for that meal (try to pass the id using GET request). From that id, show all the details to the specific meal included on your database.

require_once 'actions/db_connect.php';
// require_once '../../pre-work/CRUD/actions/db_connect.php';

$sql = "SELECT * FROM dishes";
$result = mysqli_query($connect, $sql);
$div = '';
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
if (mysqli_num_rows($result) > 0) {
    foreach ($rows as $row) {
        // img-thumbnail: .25rem border around the img
        // i need to have "form" tag as many as there are data in dishes table.

        // var_dump($row['dishID']);
        // echo "<br>";
        $div .= "<div class='eachMenu d-flex justify-content-space-between align-items-center'>
        <img class='img-thumbnail img' src='images/" . $row['image'] . "'>
        <div class='ms-5'>
            <form method='GET' action='detail.php'>
            <div>
                <input type='hidden' name='dishId' value='" . $row['dishID'] . "' />
                <input type='submit' name='submit" . $row['name'] . "' class='btnsubmit' value='" . $row['name'] . "' />
            </div>
            </form>
            <div>$" . $row['price'] . "</div>
        </div>
    </div>";
    }
} else {
    $tbody = "<tr><td colspan='3' class='text-center'>No data available.</td></tr>";
    $div = "<div>No data available.</div>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'components/boot.php' ?>

    <link rel="stylesheet" href="css/challenge.css">
    <title>Menu</title>
</head>

<body>

    <div class="menuBlock d-flex ">
        <?= $div; ?>
    </div>

</body>

</html>