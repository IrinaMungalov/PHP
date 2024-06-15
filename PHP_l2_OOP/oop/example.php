<?
// user 1
class UserOne {
    // properties
    static $username = 'johny';
    static $isOnline = true;  

    // methods

    static function printInfo(){
        print("<p>".static::$username."</p>");
    }
}

// user 2
class UserTwo {
    // properties
    static $username = 'marry';
    static $isOnline = false;

    // methods

    static function printInfo(){
        print("<p>".static::$username."</p>");
    }
}

// ----------------------
UserOne::printInfo();
UserTwo::printInfo();




