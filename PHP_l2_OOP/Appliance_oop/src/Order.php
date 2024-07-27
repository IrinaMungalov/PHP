<?
    // strict typing !!!
    class Order {
        private array $items;
        private Money $total;

        public function __construct() {
            $this->items = [];
            $this->total = new Money(0,Currency::MDL);
        }

        public function addItem (Item $item): void {
            $this->items[] = $item;
            $this->adjustTotal($item->getAppliance()->getPrice(), $item->getQuantity());
        }

        // HW*: create the removeItem(index)
        // HW*: create the changeItemQuantity(index, quantity)

        private function adjustTotal (Money $price, int $quantity): void {
            $this->total = new Money(
                $this->total->getAmount() + $price->getAmount() * $quantity,
                $price->getCurrency()
            );

        }

    }