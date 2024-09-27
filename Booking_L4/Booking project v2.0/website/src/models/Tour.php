<?

    namespace Student\Booking\models;

    // tour model - Active Record
    // HW3:
    //    1. add a column for price currency in tours table
    //    2. create a separate class named Money (value, currency)
    //    3. refector Tour class - use Money price instead of int price

    
    

    class Tour extends Model {
            public int $id;
            public string $title;
            public Money $price;
            
            public function __construct(int $id = 0, string $title = '', Money $price = null) {
                $this->id = $id;
                $this->title = $title;
                $this->price = $price ?? new Money(0, 'EUR');
            }

            public function save() {                
                //                                                              v parameters       
                $sql = 'INSERT INTO tours (id, title, price, currency) VALUES (?, ?, ?, ?)';
                $stmt = static::$pdo->prepare($sql);                                   
                $stmt->execute([$this->id, $this->title, $this->price->value, $this->price->currency]);
            }

            // HW4*: 
            //    1. add: delete() - removes the DB record corresponding to this object
            public function delete() {
                
                if ($this->id !== 0) {
                    
                    $sql = 'DELETE FROM tours WHERE id = ?';
                    $stmt = static::$pdo->prepare($sql);
                    $stmt->execute([$this->id]);

                } else {

                    die ("Unable to delete record: invalid ID.");

                }
            }

            public static function getAll () {
                        
                $stmt = static::$pdo->query('SELECT * FROM tours');
                $stmt->setFetchMode(\PDO::FETCH_ASSOC);
                $toursData = $stmt->fetchAll();   
                
                $tours =[];
                foreach ($toursData as $tourData) {
                    $price = new Money($tourData['price'], $tourData['currency']);
                    $tours[] = new Tour($tourData['id'], $tourData['title'], $price);
                }
                
                return $tours;
            }

            public static function getOne(int $id) {
                
                $stmt = static::$pdo->prepare('SELECT * FROM tours WHERE id = ?');
                $stmt->execute([$id]);

                $stmt->setFetchMode(\PDO::FETCH_ASSOC);
                $tourData = $stmt->fetch();

                if ($tourData) {
                    $price = new Money($tourData['price'], $tourData['currency']);
                    return new Tour($tourData['id'], $tourData['title'], $price);
                }

                return null;
            }
        }