<?
    require_once './src/Appliance.php';

    class TV extends Appliance {
        private Length $diagonal;

        public function __construct(int $id, string $name, Length $diagonal, Money $price) {
            // delegate construct
            parent::__construct($id, $name, $price);
            
            $this->diagonal = $diagonal;
        }
    }