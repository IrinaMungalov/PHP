<?
    require_once './src/Product.php';
    class Orange extends Product {
        public int $weight;
        public int $period;

        public function __construct(string $name, int $price, int $weight) {
            parent::__construct($name, $price);
            $this->weight = $weight;
            $this->period = 1;
        }
    }