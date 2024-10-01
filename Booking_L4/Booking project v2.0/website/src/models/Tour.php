<?

    namespace Student\Booking\models;

    // HW5: refactor getAll(), getOne() - to obtain Tour object with Money object
    

    class Tour extends Model {
        public int $id;
        public string $title;
        public Money $price;
        
        public function __construct(string $title = '', Money $price = null, int $id = 0) {
            $this->id = $id;
            $this->title = $title;
            $this->price = $price;
        }

        public function save() {
              
            $this->price->save();
            //                                 v parameters       
            $sql = 'INSERT INTO tours VALUES(?,?,?)';
            $stmt = static::$pdo->prepare($sql);                     // PDO prepared statements advantages
            $stmt->execute([$this->id, $this->title, $this->price->id]);
        }

        public static function getAll () {
                    
            $stmt = static::$pdo->query('SELECT * FROM tours');

            $stmt->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, __CLASS__);
            $tours = $stmt->fetchAll();            
            
            return $tours;
        }

        public static function getOne(int $id) {
            
            $stmt = static::$pdo->prepare('SELECT * FROM tours WHERE id = ?');
            $stmt->execute([$id]);

            $stmt->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, __CLASS__);
            $tour = $stmt->fetch();
            
            return $tour;
        }
    }