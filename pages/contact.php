<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Vragen en feedback</title>
    <link rel="stylesheet" type="text/css" href="../css/base.css" />
    <link rel="stylesheet" type="text/css" href="../css/contact.css" />
</head>

<body>
    <header>
        <h1>Neem contact met ons op</h1>
        <?php include '../includes/nav.php'; ?>
    </header>

    <main>
        <form action="#" method="post">
            <label for="naam">Naam</label>
            <input type="text" id="naam" name="naam" required />
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" required />
            <label for="bericht">Bericht</label>
            <textarea id="bericht" name="bericht"></textarea>
            <input type="submit" value="Versturen" />
        </form>
        <p>Of mail ons: <a href="mailto:info@example.com">info@example.com</a></p>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>

</html>