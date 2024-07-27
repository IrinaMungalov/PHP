<?
    require_once './src/Product.php';
    require_once './src/SwitchingTrait.php';

    class WashingMachine extends Product {
        public int $volume;
        use SwitchingTrait;

        public function __construct(string $name, int $price, int $volume) {
            parent::__construct($name,$price);
            $this->volume = $volume;
            $this->isOn = false;
        }

       
    }