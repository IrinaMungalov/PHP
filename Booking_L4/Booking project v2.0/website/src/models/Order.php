<?

    namespace Student\Booking\models;

    enum OrderStates: string {
        case draft = 'draft'; 
        case booked = 'booked'; 
        case completed = 'completed'; 
        case canceled = 'canceled';

        public function toString(){
            return $this->value;          
        }
    };
    
    class Order extends Model {
        public int $id;
        public OrderStates $state; 
        public Money $cost;
        public Client $client;

        // public OrderItem[] items;               
        public function __construct(Client $client = null, Money $cost = null, int $id = 0) {
            $this->id = $id;  
            $this->client = $client;
            $this->cost = $cost;    
            $this->state = OrderStates::draft;           
        }
        public function save() {
              
            $this->cost->save();
            // var_dump($this->client);
            $this->client->save();
            // var_dump($this->cost);
              
            $sql = 'INSERT INTO orders VALUES(?,?,?,?)';
            $stmt = static::$pdo->prepare($sql);                     
            $stmt->execute([$this->id, $this->state->toString(), $this->cost->id, $this->client->id]);
        }
    }

    // HW2: create the OrderItem class
    //      save 2-3 OrderItems that belong to the same order