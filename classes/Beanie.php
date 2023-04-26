<?php
class Beanie
{
    const AVAILABLE_SIZES = ["S", "M", "L", "XL"];

    const MATERIAL_WOOL = 'wool';
    const MATERIAL_SILK = 'silk';
    const MATERIAL_COTTON = 'cotton';
    const MATERIAL_CASHMERE = 'cashmere';

    const AVAILABLE_MATERIALS = [
        self::MATERIAL_WOOL => 'laine',
        self::MATERIAL_SILK => 'soie',
        self::MATERIAL_COTTON => 'coton',
        self::MATERIAL_CASHMERE => 'cachemire'
    ];
    protected ?string $material;
    protected array $materials = [];
    protected array $sizes = [];
    protected ?string $size;
    protected ?string $name;
    protected float $price = 0.0;
    protected ?string $image;
    protected ?string $description;
    protected ?int $id;
    public function getSizes(): array
    {
        return $this->sizes;
    }
    public function setSizes(array $sizes = []): self
    {
        foreach ($sizes as $size) {
            $this->addSize($size);
        }
        return $this;
    }
    public function addSize(string $size): self
    {
        if (!in_array($size, self::AVAILABLE_SIZES)) {
            return $this;
        }
        if (!in_array($size, $this->sizes)) {
            $this->sizes[$size] = $size;
        }
        return $this;
    }
    public function getMaterial(): array
    {
        return $this->materials;
    }
    public function setMaterials(array $materials = []): self
    {
        foreach ($materials as $material) {
            $this->addMaterial($material);
        }
        return $this;
    }
    public function addMaterial(string $material): self
    {
        if (!isset(self::AVAILABLE_MATERIALS[$material])) {
            return $this;
        }
        if (!in_array($material, $this->materials)) {
            $this->materials[$material] = $material;
        }

        return $this;
    }

    public function getName(): string
    {
        return ucfirst(strtolower($this->name));
    }
    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }
    public function getPrice()
    {
        return ($this->price);
    }
    public function setPrice($price): self
    {
        $this->price = $price;
        return $this;
    }
    public function getDescription(): ?string
    {
        return ucfirst(strtolower($this->description));
    }
    public function setDescription($description): self
    {
        $this->description = $description;
        return $this;
    }
    public function getImage(): ?string
    {
        return $this->image;
    }
    public function setImage($image): self
    {
        $this->image = $image;
        return $this;
    }

	/**
	 * @return int|null
	 */
	public function getId(): ?int {
		return $this->id;
	}
	
	/**
	 * @param int|null $id 
	 * @return self
	 */
	public function setId(?int $id): self {
		$this->id = $id;
		return $this;
	}
}
?>