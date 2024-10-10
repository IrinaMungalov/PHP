<? 
    namespace Student\Booking\models;

    class OrderItem extends Model {
        public int $id;
        public int $order_id;
        public int $tour_id;
        public int $cost_id;
        public int $touristCount;

        public function __construct(int $order_id, int $tour_id, int $cost_id, int $touristCount, int $id = 0) {
            $this->id = $id;
            $this->order_id = $order_id;
            $this->tour_id = $tour_id;
            $this->cost_id = $cost_id;
            $this->touristCount = $touristCount;
        }

        public function save() {
            $sql = 'INSERT INTO order_items VALUES (?, ?, ?, ?, ?)';
            $stmt = static::$pdo->prepare($sql);
            $stmt->execute([$this->id, $this->order_id, $this->tour_id, $this->cost_id, $this->touristCount]);
        }
    }