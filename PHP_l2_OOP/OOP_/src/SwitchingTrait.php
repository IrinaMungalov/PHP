<?

    trait SwitchingTrait {
        public bool $isOn;
        
        public function switchOn (): void {
            $this->isOn = true;
        }
        public function switchOff (): void {
            $this->isOn = false;
        }
    }