<?php
require_once "./template/header.php";
require_once "../model/data.php";
?>
<main>
    <article>
        <h2>Posts</h2>
        <section class="posts">
            <?php foreach ($posts as $post) echo $post->render(); ?>
        </section>
    </article>
</main>
<?php require_once "./template/footer.php"; ?>