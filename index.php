<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            /*justify-content: center;*/
            /*align-items: center;*/
            min-height: 100vh;
            margin: 0;
            font-family: sans-serif;
            background: gray;
        }
    </style>
</head>
<body>

<h1>
    <?php

    $myArray = [
            "name" => "John Doe",
            "age" => 25,
    ];

    function name($name, $age): string
    {
        return "hello, My name is {$name}, and I'm $age years old.";
    }

    $functionCall = name($myArray['name'], $myArray['age']);
    echo $functionCall;

    ?>
</h1>

</body>
</html>