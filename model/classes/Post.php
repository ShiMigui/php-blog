<?php
require_once '../model/interfaces/Renderable.php';

const POSTS_IMAGES_SRC = "img/posts/";
class Post implements Renderable
{
    private int $cd;
    private string $name;
    private string $description;
    private string $text;
    /** @var Tag[] */
    private array $tags;
    private string $image;

    private string $sum;

    public function __construct(int $cd, string $name, string $description, array $tags, string $text = '')
    {
        if ($cd === 0) throw new InvalidArgumentException("The code cannot be zero.");
        $link = POSTS_IMAGES_SRC . $cd . ".jpg";

        $this->cd = $cd;
        $this->setName($name);
        $this->setDescription($description);
        $this->setTags($tags);
        $this->image = file_exists($link) ? $link : POSTS_IMAGES_SRC . "g800x450.svg";
        $this->setText($text);
        $this->updateSum();
    }

    public function render(): string
    {
        return "<a href='post.php?cd=$this->cd' class='post'><img src='$this->image' alt='$this->description'/><h3 class='title'>$this->name</h3></a>";
    }

    public function getCd(): int
    {
        return $this->cd;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getTags(): array
    {
        return $this->tags;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getSum(): string
    {
        return $this->sum;
    }

    public function updateSum()
    {
        $reduced_tags = array_reduce($this->tags, fn(string $s, Tag $t) => $s . ' ' . $t->getName(), '');
        $this->sum = strtolower("$this->name $this->description $this->text $reduced_tags");
    }

    public function setName(string $name): self
    {
        $this->isNotEmpty($name, "The name cannot be empty.");
        $this->name = ucfirst($name);
        return $this;
    }

    public function setDescription(string $description): self
    {
        $this->description = ucfirst($description);
        return $this;
    }

    public function setTags(array $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

    public function setText(string $text): self
    {
        $this->text = $text;
        return $this;
    }

    private function isNotEmpty($value, string $message): void
    {
        if (empty($value)) throw new InvalidArgumentException($message);
    }
}
