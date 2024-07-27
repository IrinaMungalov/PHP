<?

    abstract class Appliance {
        const ID_MIN = 0;
        const ID_MAX = 1_000_000;
        private int $id;
        private string $name;
        private Money $price;

        public function __construct(int $id, string $name, Money $price) {
            $this->setId($id);
            $this->setName($name);
            $this->price = $price;

        }

        # HW1: refactor the code using __set(), __get()
        public function setId(int $id): void {

            if ($id <= static::ID_MIN || $id >= static::ID_MAX) {
                # HW2: sprintf()
                # print( sprintf("ERROR: id must be in range (%d...%d)\n", static::ID_MIN, static::ID_MAX) );
                die("ERROR: id must be in range (".static::ID_MIN."...".static::ID_MAX.")\n");
            } 
                
            $this->id = $id;
            
            }

        public function getId(): int {
            return $this->id;
        }

        # HW3: add set get for name: must contain at 3 characters
        public function setName(string $name): void {
            
            if (strlen($name) < 3) {
                die("ERROR: The name must contain at 3 characters!");
            }

            $this->name = $name;
            }

        public function getName(): string {
            return $this->name;
        }    
        
        public function getPrice(): Money {
            return $this->price;
        }

        public function setPrice(Money $price): void {
            $this->price = $price;
        }




    }

