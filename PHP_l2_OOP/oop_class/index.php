<? 

abstract class Item {
    public $name;
    public $image;
    public $price;

    public function __construct($name, $image, $price) {
        $this->name  = $name;
        $this->image = $image;
        $this->price = $price;
    }
}

class Food extends Item {
    public $weight;

    public function __construct($name, $image, $price, $weight) {
        parent::__construct($name, $image, $price);
        $this->weight = $weight;
    }

    public function __toString() {
        return "<p>FOOD ({$this->weight}g): {$this->name} \${$this->price}</p>";
    }
}

class Drink extends Item {
    public $volume;

    public function __construct($name, $image, $price, $volume) {
        parent::__construct($name, $image, $price);
        $this->volume = $volume;
    }

    public function __toString() {
        return "<p>DRINK ({$this->volume}ml): {$this->name} \${$this->price}</p>";
    }
}

class DeliveryService extends Item {
    public $deliveryTime;
    public $distance;
    public $deliveryMethod;
    public $contactNumber;
    public $deliveryAddress;

    public function __construct($name, $image, $price, $deliveryTime, $distance, $deliveryMethod, $contactNumber, $deliveryAddress) {
        parent::__construct($name, $image, $price);
        $this->deliveryTime = $deliveryTime;
        $this->distance = $distance;
        $this->deliveryMethod = $deliveryMethod;
        $this->contactNumber = $contactNumber;
        $this->deliveryAddress = $deliveryAddress;
    }

    public function __toString() {
        return "<p>DELIVERY: {$this->name}, \${$this->price}, Delivery time: {$this->deliveryTime} mins, Distance: {$this->distance} km, Method: {$this->deliveryMethod}, Contact: {$this->contactNumber}, Address: {$this->deliveryAddress}</p>";
    }
}

?>


<!--
    ####################################################################
-->

<?

    $food1 = new Food(
        "Salad", 
        "images/salad/1.jpg", 
        100, 
        1000
    );
    print($food1);

    $drink1 = new Drink(
        "Apple Juice", 
        "images/juice/1.jpg", 
        50, 
        500
    );
    print($drink1);

    $delivery1 = new DeliveryService(
        "Express Delivery", 
        "images/delivery/1.jpg", 
        200, 
        30, 
        5, 
        "Courier", 
        "987-654-3210",          
        "543 Main St, Washington"
    );
    print($delivery1);  

?>