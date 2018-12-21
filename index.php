<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
</head>
<body>
<h1> Урок №2</h1>
<?
// Первое задание
abstract class good {

	abstract protected function getRevenue();

	public function displayRevenue()
		{
			echo $this->getRevenue() . "<br>";
		}	
}
class normalgood extends good
	{
		public $uom; 
		public $price; 
		public $qty;		

		function __construct($uom, $price, $qty) 
		{
			$this->uom = $uom;
			$this->price = $price;
			$this->qty = $qty;
		}

		protected function getRevenue()
		{
			return $this->qty*$this->price . "<span> - стоимость за </span>" . $this->qty . $this->uom;
		}
	}
class expensivegood extends normalgood
	{
		
		function __construct($uom, $price, $qty)
		{
			parent::__construct($uom, $price, $qty);			
		}

		protected function getRevenue()
		{
			return $this->qty*$this->price*2 . "<span> - стоимость с учетом к-та повышения цены за </span>" . $this->qty . $this->uom;
		}
	}
$diggood = new normalgood ("click",100,1);
$diggood->displayRevenue(); 
$weightgood = new normalgood ("kilo",70,5);
$weightgood->displayRevenue(); 
$piecegood = new expensivegood ("item",100,1);
$piecegood->displayRevenue(); 
?>

</body>
</html>