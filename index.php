<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Zoek snel een openbaar toilet of drinkwaterpunt in jouw buurt." />
  <meta name="keywords" content="openbaar toilet, waterpunt, toegankelijk, gratis" />
  <meta name="author" content="Ernesto Lanera" />
  <title>Home | Openbare Voorzieningen</title>
  <link rel="stylesheet" href="css/base.css" />
  <link rel="stylesheet" href="css/home.css" />
</head>

<body>
  <header>
    <h1>Vind direct een openbaar toilet of waterpunt in jouw buurt</h1>
    <?php include 'php/includes/nav.php'; ?>
  </header>

  <main>
    <section>
      <p class="intro">Zoek snel naar toegankelijke en schone voorzieningen bij jou in de buurt. Onze kaart laat zien waar je terecht kunt voor een toilet of drinkwater.</p>
      <form action="./pages/toiletten.php" method="get">
        <label for="zoek">Postcode of locatie</label>
        <input type="search" id="zoek" name="zoek" placeholder="bijv. 3011 AA of Rotterdam" />
        <input type="submit" value="Zoek" />
      </form>
      <p><a class="cta" href="pages/toiletten.php">Bekijk toiletten in de buurt</a></p>
    </section>
  </main>

  <?php include 'php/includes/footer.php'; ?>
</body>

</html>