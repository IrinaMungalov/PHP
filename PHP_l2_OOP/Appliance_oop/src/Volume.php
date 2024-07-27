<?
    namespace Volume;
    enum Units {
        case LITER;
        case MILLILITER;
        case CV3;
    }

    class Volume {
        private int|float $value;
        private Units $unit;

        public function __construct(int|float $value, Units $unit) {
            $this->value = $value;
            $this->unit = $unit;
        }
    }