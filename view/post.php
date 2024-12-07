<?php
require_once "../model/classes/Tag.php";
require_once "../model/classes/Post.php";
require_once "../model/data.php";
require_once "./template/header.php";

$cd = $_GET['cd'];
if (!isset($cd)) header("Location: index.php");

$post = take_post_by_code($posts, $cd);
?>
<main>
    <section id="post-section">
        <img src="<?= $post->getImage() ?>" alt="<?= $post->getDescription() ?>" id="post-banner">
        <h1 id="post-name"><?= $post->getName() ?></h1>
        <h4 id="post-description"><i><?=$post->getDescription()?></i></h4>

        <p><?= nl2br(htmlspecialchars($post->getText())) ?></p>
    </section>
</main>
<?php require_once "./template/footer.php"; ?>