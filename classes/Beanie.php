<?php
class Beanie
{
    public function getName(): ?string
    {
        return ucfirst(strtolower($this->name));
    }
    public function setName(?string $name): Beanie
    {
        $this->name = $name;
        return $this;
    }
    public function getPrice(): ?float
    {
        return ($this->price);
    }
    public function setPrice(?float $price): Beanie
    {
        $this->price = $price;
        return $this;
    }
    public function getDescription(): ?string
    {
        return ucfirst(strtolower($this->description));
    }
    public function setDescription(?string $description): Beanie
    {
        $this->description = $description;
        return $this;
    }
    public function getImage(): ?string
    {
        return $this->image;
    }
    public function setImage(?string $image): Beanie
    {
        $this->image = $image;
        return $this;
    }
}
?>