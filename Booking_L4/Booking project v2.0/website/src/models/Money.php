<?php

    namespace Student\Booking\models;

    class Money {
        public int $value;
        public string $currency;

        public function __construct(int $value, string $currency = 'EUR') {
            $this->value = $value;
            $this->currency = $currency;
        }

        public function __toString() {
            return $this->value . ' ' . $this->currency;
        }
    }