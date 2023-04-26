<?php
class Cart
{

	// protected int $id;
	// protected ?array $cart;
	// protected ?string $action;

	protected $content = [];

	public function __construct()
	{
		if (!isset($_SESSION['cart'])) {
			$_SESSION['cart'] = [];
		}
		$this->content = $_SESSION['cart'];
	}

	public function add(int $id): self
	{
		if (!isset($this->content[$id])) {
			$this->content[$id] = 0;
		}
		$this->content[$id]++;
		return $this;
	}

	public function min(int $id): self
	{
		if (!isset($this->content[$id])) {
			$this->content[$id] = 0;
		}
		$this->content[$id]--;
		return $this;
	}

	public function del(int $id): self
	{
		if (isset($this->content[$id])) {
			unset($this->content[$id]);
		}
		return $this;
	}
	public function empty(): self
	{
		if (isset($this->content)) {
			$this->content = [];
		}
		return $this;
	}
	public function save(): self
	{
		$_SESSION['cart'] = $this->getContent();
		return $this;
	}

	public function handle(array $getData = []): bool
	{
		if (isset($getData['id'])) {
			$id = $getData['id'];
		}
		$action = 'plus';
		if (isset($getData['action'])) {
			$action = $getData['action'];
			switch ($action) {
				case 'plus':
					$this->add($id);
					break;
				case 'moins':
					$this->min($id);
					break;
				case 'suprimer':
					$this->del($id);
					break;
			}

			if ($this->content[$id] <= 0) {
				unset($this->content[$id]);
			}
			$this->save();
			return true;
		}
		if (isset($getData['action']) && $getData['action'] == 'empty') {
			$this->empty();
			$this->save();
			return true;
		}
		return false;
	}

	public function getContent()
	{
		return $this->content;
	}
}

?>