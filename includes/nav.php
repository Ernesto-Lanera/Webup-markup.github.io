<?php
// Bepaal de huidige bestandsnaam
$current = basename($_SERVER['PHP_SELF']);
?>

<nav aria-label="Hoofdnavigatie">
    <ul>
        <?php if ($current !== "index.php"): ?>
            <li><a href="/WEBUP-MARKUP/index.php">Home</a></li>
        <?php endif; ?>

        <?php if ($current !== "toiletten.php"): ?>
            <li><a href="/WEBUP-MARKUP/pages/toiletten.php">Toiletten</a></li>
        <?php endif; ?>

        <?php if ($current !== "waterpunten.php"): ?>
            <li><a href="/WEBUP-MARKUP/pages/waterpunten.php">Waterpunten</a></li>
        <?php endif; ?>

        <?php if ($current !== "reviews.php"): ?>
            <li><a href="/WEBUP-MARKUP/pages/reviews.php">Reviews</a></li>
        <?php endif; ?>

        <?php if ($current !== "melden.php"): ?>
            <li><a href="/WEBUP-MARKUP/pages/melden.php">Contact & melden</a></li>
        <?php endif; ?>

        <?php if ($current !== "contact.php"): ?>
            <li><a href="/WEBUP-MARKUP/pages/contact.php">Contact</a></li>
        <?php endif; ?>
    </ul>
</nav>