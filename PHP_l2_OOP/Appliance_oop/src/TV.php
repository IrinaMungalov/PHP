<?
    require_once './src/Appliance.php';

    class TV extends Appliance {
        private \Length\Length $diagonal;

        public function __construct(
            int $id, 
            string $name, 
            \Length\Length $diagonal, 
            Money $price) {
            // delegate construct
            parent::__construct($id, $name, $price);
            
            $this->diagonal = $diagonal;
        }
    }