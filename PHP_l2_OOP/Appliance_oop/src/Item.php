<?
    class Item {
        private Appliance $appliance;
        private int $quantity;
                                        //      ref
                                        //       v
        public function __construct(Appliance $appliance, int $quantity) {
            
            // copy the product, to avoid leaking REFERENCE !!!
            // shallow copy
            $applianceCopy = clone $appliance;

            $this->appliance = $applianceCopy;
            $this->quantity = $quantity;
        }

        public function getAppliance (): Appliance {
            return $this->appliance;
        }

        public function getQuantity (): int {
            return $this->quantity;
        }

        
    }