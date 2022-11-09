<!-- http://localhost/php-exercises/day3/pre-work/prework.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    $a = 0;
    $b = 0;
    for ($i = 0; $i < 5; $i++) {
        $a += 10;
        $b += 5;
    }
    echo ("At the end of the loop a=$a and b=$b");
    // Output:
    // At the end of the loop a=50 and b=25
    ?>

    <br>

    <?php
    $i = 0;
    $num = 50;
    while ($i < 10) {
        $num--;
        $i++;
    }
    echo ("Loop stopped at i = $i and num = $num");
    // Output:
    // "Loop stopped at i = 10 with num = 40"
    ?>

    <br>

    <?php
    $i = 0;
    $num = 0;
    do {
        $i++;
    } while ($i < 10);

    echo ("At the end of the loop i=$i");

    // Output:
    // "Loop stopped at i = 10"

    ?>

    <br>

    <?php
       $array = array(1, 2, 3, 4, 5);
       foreach($array as $value)
       {
           echo "Value is $value <br/>";
       }
       //Output:
       //Value is 1
       //Value is 2
       //Value is 3
       //Value is 4
       //Value is 5
       ?>

       <br>

       <?php
       $i = 0;
       while($i < 10)
       {
           $i++;
           if($i == 3) break;
       }
       echo ("Loop stopped at i = $i");
       //Output:
       //Loop stopped at i=3
       ?>

       <br>

       <?php
       $array = array(1, 2, 3, 4, 5);
       foreach($array as $value)
       {
           if($value == 3) continue;
           echo "Value is $value <br/>";
       }
       // Output:
       // Value is 1
       // Value is 2
       // Value is 4
       // Value is 5
       ?>
</body>

</html>