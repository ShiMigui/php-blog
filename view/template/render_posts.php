<?php
require_once __DIR__ . "/message.php";
function render_posts(array $posts, string $empty_message = '', bool $main = false)
{
    if (empty($posts)) {
        message($empty_message);
        return;
    }

    $c = $main ? 'main' : '';
    $render = array_reduce($posts, fn(string $carry, Post $post) => $carry . $post->render(), '');
    return "<article><h2>Posts</h2><section class='posts $c'>$render</section></article>";
}
