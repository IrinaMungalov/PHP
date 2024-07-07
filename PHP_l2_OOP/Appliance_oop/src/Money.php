<?
    enum Currency {
        case EUR;
        case USD;
        case MDL;
    }
    class Money {
        const MIN_AMOUNT = 0;
        const MAX_AMOUNT = 1_000_000;
        private int $amount;   #  x100 | 1.00$ -> 100
        private Currency $currency;

        public function __construct(int $amount, Currency $currency) {
            $this->setAmount($amount);
            $this->setCurrency($currency);
        }

        # HW4: limit to the max and min of integer
        public function setAmount(int $amount): void {

            if ($amount < static::MIN_AMOUNT || $amount > static::MAX_AMOUNT) {
                die("ERROR: The amount must be in range (".static::MIN_AMOUNT."...".static::MAX_AMOUNT.")\n");
            }            
                $this->amount = $amount;
            }       
        public function getAmount(): int {
            return $this->amount;
        }

        # HW5: allow only EUR,USD,MDL
        public function setCurrency(Currency $currency): void { 
            $validCurrency = [Currency::EUR, Currency::USD, Currency::MDL];
            
            if (!in_array($currency, $validCurrency, true)) {
                die("ERROR: Allowed currencies are: " . implode(', ', $validCurrency));
            }
                $this->currency = $currency;
            }
        public function getCurrency(): Currency {
            return $this->currency;
        }
    }