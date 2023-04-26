<?php
class BeanieFilter
{
	protected array $beanies = [];
	protected ?string $material = null;
	protected ?string $size = null;
	protected ?float $minPrice = null;
	protected ?float $maxPrice = null;


	public function __construct(array $beanies, array $filted)
	{
		if (!empty($filted["material"])) {
			$this->material = trim($filted["material"])
			;
		}
		if (!empty($filted["size"])) {
			$this->size = trim($filted["size"])
			;
		}
		if (!empty($filted["minPrice"])) {
			$this->minPrice = floatval($filted["minPrice"])
			;
		}
		if (!empty($filted["maxPrice"])) {
			$this->maxPrice = floatval($filted["maxPrice"])
			;
		}
		$this->beanies = $this->filter($beanies);
	}
	public function filter(array $beanies): array
	{

		$material = $this->getMaterial();
		if ($material) {
			$beanies = array_filter($beanies, function (Beanie $beanie) use ($material) {
				return in_array($material, $beanie->getMaterial());
			});
		}


		$size = $this->getSize();
		if ($size) {
			$beanies = array_filter($beanies, function (Beanie $beanie) use ($size) {
				return in_array($size, $beanie->getSizes());
			});
		}


		$minPrice = $this->getMinPrice();
		if ($minPrice) {
			$beanies = array_filter($beanies, function (Beanie $beanie) use ($minPrice) {
				return $beanie->getPrice() >= $minPrice;
			});
		}


		$maxPrice = $this->getMaxPrice();
		if ($maxPrice) {
			$beanies = array_filter($beanies, function (Beanie $beanie) use ($maxPrice) {
				return $beanie->getPrice() <= $maxPrice;
			});
		}
		return $beanies;
	}



	public function getMaterial(): ?string
	{
		return $this->material;
	}


	public function getSize(): ?string
	{
		return $this->size;
	}


	public function getMinPrice(): ?float
	{
		return $this->minPrice;
	}



	public function getMaxPrice(): ?float
	{
		return $this->maxPrice;
	}

	public function getResult(): array
	{
		return $this->beanies;
	}
}
?>