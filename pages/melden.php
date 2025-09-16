<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Meld ontbrekende of foutieve locaties van toiletten en waterpunten. Vul het formulier in en help ons de informatie actueel en betrouwbaar te houden." />
    <meta name="keywords" content="melden, contact, fout, locatie, formulier" />
    <meta name="author" content="Ernesto Lanera" />
    <title>Contact & Melden | Openbare Voorzieningen</title>
    <link rel="stylesheet" type="text/css" href="../css/base.css" />
    <link rel="stylesheet" type="text/css" href="../css/melden.css" />
</head>

<body>
    <header>
        <h1>Meld ontbrekende of foutieve locaties</h1>
        <?php include '../includes/nav.php'; ?>
    </header>

    <main>
        <form action="#" method="post">
            <label for="naam">Naam</label>
            <input type="text" id="naam" name="naam" required />
            <label for="mail">E-mail</label>
            <input type="email" id="mail" name="mail" required />
            <label for="melding">Melding</label>
            <textarea id="melding" name="melding"></textarea>
            <input type="submit" value="Verstuur melding" />
        </form>

        <section>
            <h2>Veelgestelde vragen</h2>
            <details>
                <summary>Waarom ontbreken sommige locaties?</summary>
                <p>Data wordt verzameld uit openbare bronnen en community-meldingen.</p>
            </details>
        </section>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>

</html>