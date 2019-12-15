<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Challenge 1</title>
</head>

<body>
    <?php
    function cleanText()
    {
        
        $file = file_get_contents('input.txt');
        $input = preg_replace('/[^a-z A-Z]/', ' ', $file);

        return $input;
    }
    ?>
    <p><?= cleantext() ?></p>
</body>

</html>