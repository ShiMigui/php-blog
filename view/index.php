<?php
require_once "../model/classes/Tag.php";
require_once "../model/classes/Post.php";
require_once "../model/data.php";
require_once "./template/render_posts.php";
require_once "./template/header.php";
?>
<main><?= render_posts($posts, "Sorry, we couldn't find any posts at the moment. Please check back later.", true) ?></main>
<?php require_once "./template/footer.php"; ?>