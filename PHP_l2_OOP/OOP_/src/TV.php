<?
    require_once './src/Product.php';
    require_once './src/SwitchingTrait.php';
    class TV extends Product {
        public int $diagonal;
        use SwitchingTrait;

        public function __construct(string $name, int $price, int $diagonal) {
            parent::__construct($name, $price);
            $this->diagonal = $diagonal;
            $this->isOn = false;
        }

        
    }