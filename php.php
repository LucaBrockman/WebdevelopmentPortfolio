<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= stylesheet href="css/style.css">
    <title>PHP</title>
</head>
<body>

    <?php
        include 'header.php';
    ?>
    
    <main>

    <form action="php.php" method="post">
        <label for="celsius">Celsius</label>
        <input type="number" name="celsius" id="celsius">
        <input type="submit" value="Convert">
    </form>

   

    <?php

    function celsius2fahrenheit($celsius) {
        return round($celsius * 9/5 + 32);
    }

    function fahrenheit2celsius($fahrenheit) {
        return round(($fahrenheit - 32) * 5/9);
    }

    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        $celsius = filter_input(INPUT_POST, 'celsius', FILTER_VALIDATE_INT); 
        echo "<p>".celsius2fahrenheit($celsius)."</p>";
    }



    // $gradencelsius = 20;
    // $gradenfahrenheit = $gradencelsius *9/5 + 32;
    // echo "<p>A: $gradencelsius  graden celsius is $gradenfahrenheit graden fahrenheit </p>";


    // $gradenfahrenheit2 = 68;
    // $gradencelsius2 = ($gradenfahrenheit2 - 32) * 5/9;
    // echo "<p>B: $gradenfahrenheit2 graden fahrenheit is $gradencelsius2 graden celsius </p>";

    // $kilometer = 10;
    // $mijl = $kilometer * 0.6214;
    // echo "<p>C: $kilometer kilometer is $mijl mijl </p>";

    // $straal = 5;
    // $oppervlakte = $straal * $straal * pi();
    // echo "<p>D: De oppervlakte van een cirkel met een straal van $straal is $oppervlakte </p>";

    
    ?>

    </main>


    <?php
        include 'footer.php';
    ?>

</body>
</html>