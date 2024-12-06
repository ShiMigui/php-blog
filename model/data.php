<?php
require_once "../model/classes/Tag.php";
require_once "../model/classes/Post.php";

$tags = [
  new Tag(1, "PHP"),
  new Tag(2, "Java"),
  new Tag(3, "Javascript"),
  new Tag(4, "HTML"),
  new Tag(5, "CSS"),
  new Tag(6, "NodeJS"),
  new Tag(7, "OnlyChatting"),
  new Tag(8, "Technology")
];

function take_tag(array $tags, int ...$cds): array
{
  $result = [];

  foreach ($cds as $cd) $result[] = $tags[$cd - 1];

  return $result;
}

$posts = [
  new Post(1, "Hello world!", "My first publication in this blog!", take_tag($tags, 7, 8)),
  new Post(2, "Learning PHP", "This post is all about PHP, one of the most popular programming languages.", take_tag($tags, 1, 4)),
  new Post(3, "Web Development Basics", "A brief introduction to web development with HTML, CSS, and JavaScript.", take_tag($tags, 4, 5, 3)),
  new Post(4, "Exploring NodeJS", "Node.js allows you to build scalable network applications. In this post, we explore its capabilities.", take_tag($tags, 6, 2)),
  new Post(5, "Java vs JavaScript", "What's the difference between Java and JavaScript? This post explains everything.", take_tag($tags, 2, 3)),
  new Post(6, "Technology News", "The latest updates in the world of technology. Stay up to date with the cutting edge.", take_tag($tags, 8)),
  new Post(7, "CSS Styling Tips", "Learn about various CSS tricks and techniques for styling your webpages.", take_tag($tags, 5)),
  new Post(8, "Chatting and Networking", "How to build a simple chat application with modern web technologies.", take_tag($tags, 7, 6))
];

function take_post(array $posts, int ...$cds): array
{
  $result = [];

  foreach ($cds as $cd) $result[] = $posts[$cd - 1];

  return $result;
}
