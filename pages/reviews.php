<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Lees ervaringen van andere gebruikers over toiletten en waterpunten. Schrijf een review en beoordeel voorzieningen met sterren en tekst." />
    <meta name="keywords" content="reviews, beoordelingen, sterren, ervaringen, feedback" />
    <meta name="author" content="Ernesto Lanera" />
    <title>Reviews | Openbare Voorzieningen</title>
    <link rel="stylesheet" type="text/css" href="../css/base.css" />
    <link rel="stylesheet" type="text/css" href="../css/reviews.css" />
</head>

<body>
    <header>
        <h1>Ervaringen van andere gebruikers</h1>
        <?php include '../includes/nav.php'; ?>
    </header>

    <main>
        <ul class="reviews">
            <li>★★★★☆ Toilet Stadhuisplein: schoon en centraal</li>
            <li>★★★☆☆ Waterpunt Park Zuid: prima tappunt, soms druk</li>
        </ul>

        <form action="#" method="post">
            <label for="locatie">Locatie</label>
            <input type="text" id="locatie" name="locatie" required />
            <label for="sterren">Sterren</label>
            <input type="number" id="sterren" name="sterren" min="1" max="5" required />
            <label for="review">Review</label>
            <textarea id="review" name="review"></textarea>
            <input type="submit" value="Plaats review" />
        </form>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>

</html>