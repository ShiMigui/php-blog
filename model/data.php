<?php
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
  new Post(
    1,
    "Hello world!",
    "My first publication in this blog!",
    take_tag($tags, 7, 8),
    "Welcome to my blog! This is my first post where I share my excitement about starting this new journey. Stay tuned for more updates and interesting topics."
  ),
  new Post(
    2,
    "Learning PHP",
    "This post is all about PHP, one of the most popular programming languages.",
    take_tag($tags, 1, 4),
    "PHP is a versatile and powerful language used to create dynamic web applications. In this post, we'll explore some basic concepts to get you started."
  ),
  new Post(
    3,
    "Web Development Basics",
    "A brief introduction to web development with HTML, CSS, and JavaScript.",
    take_tag($tags, 4, 5, 3),
    "Web development is an essential skill in today's digital world. We'll cover the building blocks of web development: HTML for structure, CSS for style, and JavaScript for interactivity."
  ),
  new Post(
    4,
    "Exploring NodeJS",
    "Node.js allows you to build scalable network applications. In this post, we explore its capabilities.",
    take_tag($tags, 6, 2),
    "Node.js enables developers to build fast and scalable network applications using JavaScript. Learn how to get started and unleash the power of Node.js in your projects."
  ),
  new Post(
    5,
    "Java vs JavaScript",
    "What's the difference between Java and JavaScript? This post explains everything.",
    take_tag($tags, 2, 3),
    "Despite their similar names, Java and JavaScript are very different. Java is a general-purpose programming language, while JavaScript is mainly used for web development. Let's dive deeper into their differences."
  ),
  new Post(
    6,
    "Technology News",
    "The latest updates in the world of technology. Stay up to date with the cutting edge.",
    take_tag($tags, 8),
    "Stay informed with the latest news and trends in the technology industry. From AI advancements to groundbreaking innovations, we've got you covered."
  ),
  new Post(
    7,
    "CSS Styling Tips",
    "Learn about various CSS tricks and techniques for styling your webpages.",
    take_tag($tags, 5),
    "CSS is a powerful tool for creating beautiful and responsive web designs. In this post, we'll share some tips and tricks to elevate your styling skills."
  ),
  new Post(
    8,
    "Chatting and Networking",
    "How to build a simple chat application with modern web technologies.",
    take_tag($tags, 7, 6),
    "Building a chat application is a great way to learn about real-time communication. This post will guide you through the process using modern web technologies."
  )
];

function take_post_by_code(array $posts, int $code): Post
{
  return $posts[$code - 1] ?? null;
}

function take_post(array $posts, int ...$cds): array
{
  $result = [];

  foreach ($cds as $cd) {
    $post = take_post_by_code($posts, $cd);

    if ($post) $result[] = $post;
  }

  return $result;
}
