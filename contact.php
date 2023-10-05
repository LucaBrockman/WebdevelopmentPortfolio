<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= stylesheet href="css/style.css">
    <title>Contact</title>
</head>
<body>
    <?php
        include 'header.php';
    ?>
    <h1>Contact</h1>
    <form class="container">
        <div>
            <input type="text" name="firstname" id="firstname" placeholder="Voornaam" required>
            <input type="text" name="lastname" id="lastname" placeholder="Achternaam" required>
        </div>
        <div>
            <input type="email" name="email" id="email" placeholder="Email" required>
        </div>
        <div>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Bericht" required></textarea>
        </div>

        <div>
            <input type="submit" value="Verstuur">
        </div>
    </form>

    <?php
        include 'footer.php';
    ?>
</body>
</html>