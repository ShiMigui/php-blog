<?php

class Tag
{
    private int $cd;
    private string $name;

    public function __construct(int $cd, string $name)
    {
        if ($cd === 0) throw new InvalidArgumentException("The code cannot be null or zero.");
        $this->cd = $cd;
        $this->setName($name);
    }

    public function getCd(): int
    {
        return $this->cd;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        if (empty(trim($name))) throw new InvalidArgumentException("The name cannot be null or empty.");
        $this->name = ucfirst($name);
        return $this;
    }
}
