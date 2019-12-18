<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Challenge 2</title>
    </head>

    <body>
        <h2>Count one by one and if its devisible by 3 the number will be replaced by fizz. If the number is devisible by 5, it will be replaced by buzz.</h2>
<?php
    $numbers = [];
    $fizz = 3;
    $buzz = 5;

    for ($index = 1; $index <= 100; $index++) {

        $count = $index;
        if ($count % $fizz === 0 && $count % $buzz != 0) {
            $count = 'Fizz at (' . $count . ')';
        } elseif ($count % $buzz === 0 && $count % $fizz != 0) {
            $count = 'Buzz at (' . $count . ')';
        } elseif ($count % $fizz === 0 && $count % $buzz === 0) {
            $count = 'Fizz Buzz at (' . $count . ')';
        }
        $numbers[$index] = $count;
    };
    foreach ($numbers as $number) {
        echo $number . '<br>';
    }
?>

    </body>

    </html>