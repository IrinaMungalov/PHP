<?
    enum Currency {
        case EUR;
        case USD;
        case MDL;
    }
    class Money {
        private int $amount;   #  x100 | 1.00$ -> 100
        private Currency $currency;

        public function __construct(int $amount, Currency $currency) {
            $this->setAmount($amount);
            $this->setCurrency($currency);
        }

        # HW4: limit to the max and min of integer
        public function setAmount(int $amount): void {
            $minAmount = 0;
            $maxAmount = 1_000_000;

            # $this->amount = clamp($amount, $minAmount, $maxAmount); -> PHP 8.0

            if ($amount < $minAmount || $amount > $maxAmount) {
                die("ERROR: The amount must be between $minAmount and $maxAmount!");
            }            
                $this->amount = $amount;
            }       
        public function getAmount(): int {
            return $this->amount;
        }

        # HW5: allow only EUR,USD,MDL
        public function setCurrency(Currency $currency): void {            
            $this->currency = $currency;
        }
        public function getCurrency(): Currency {
            return $this->currency;
        }
    }