<?php
require_once "../model/classes/Tag.php";
require_once "../model/classes/Post.php";
require_once "../model/data.php";
require_once "./template/render_posts.php";
require_once "./template/header.php";

if (!isset($_GET['q'])) header("Location: index.php");
$q = $_GET['q'];
$query = strtolower(trim($q));

$searched_posts = array_filter($posts, fn($post) => str_contains(strtolower($post->getSum()), $query));
?>
<main><?= render_posts($searched_posts, "Sorry, we couldn't find any posts matching with '$q'. Please try again later.") ?></main>
<?php require_once "./template/footer.php"; ?>