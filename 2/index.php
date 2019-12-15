<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Challenge 2</title>
</head>

<body>
    <p>Count one by one and if its devisible by fizz</p>
    <?php
    $numbers = [];
    $fizz = 3;
    $bizz = 5;

    for ($index = 1; $index <= 100; $index++) {

        $count = $index;
        if ($count % $fizz === 0 && $count % $bizz != 0) {
            $count = 'Fizz at (' . $count . ')';
        } elseif ($count % $bizz === 0 && $count % $fizz != 0) {
            $count = 'Bizz at (' . $count . ')';
        } elseif ($count % $fizz === 0 && $count % $bizz === 0) {
            $count = 'Fizz Bizz at (' . $count . ')';
        }
        $numbers[$index] = $count;
    };
    
    foreach($numbers as $number) {
        echo $number . '<br>';
    }
?>

</body>

</html>