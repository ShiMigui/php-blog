<?php
require_once '../model/interfaces/Renderable.php';

const POSTS_IMAGES_SRC = "img/posts/";
class Post implements Renderable
{
    private int $cd;
    private string $name;
    private string $description;
    /** @var Tag[] */
    private array $tags;
    private string $image;

    public function __construct(int $cd, string $name, string $description, array $tags)
    {
        if ($cd === 0) throw new InvalidArgumentException("The code cannot be zero.");
        $link = POSTS_IMAGES_SRC . $cd . ".jpg";

        $this->cd = $cd;
        $this->setName($name);
        $this->setDescription($description);
        $this->setTags($tags);
        $this->image = file_exists($link) ? $link : POSTS_IMAGES_SRC . "g800x450.svg";
    }

    public function render() : string {
        return "
            <a href='post.php?cd=$this->cd' class='post'>
                <img src='$this->image' alt='$this->description'/>
                <h3>$this->name</h3>
            </a>
        ";
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

    private function isNotEmpty($value, string $message): void
    {
        if (empty($value)) throw new InvalidArgumentException($message);
    }
}
