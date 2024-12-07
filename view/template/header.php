<?php require_once '../model/helpers/url.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?= BASE_URL ?>">
    <title>From my window | <?= $pageName ?></title>
    <link rel="stylesheet" href="./style/global.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="./script/events/shortcuts.js" defer></script>
    <script src="./script/events/navHighlighting.js" defer></script>
    <link rel="shortcut icon" href="./img/logo.svg" type="image/x-icon">
</head>

<body>
    <header>
        <section>
            <a href="./index.php">
                <img src="./img/logo.svg" alt="Logo">
                <span>From my window</span>
            </a>

            <nav>
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./about.php">About</a></li>
                </ul>
            </nav>

            <form action="./search.php" method="get">
                <input type="text" name="q" id="searchInput">
                <button type="submit"><img src="./img/icons/search.png" alt="Search"></button>
            </form>
        </section>
    </header>