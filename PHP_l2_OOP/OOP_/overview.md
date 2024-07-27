








# OOP / PHP

  !!! PHP > Java, TypeScript, C#, C++, ...
  !!! PHP > Angular, Vue, ...

  > class / object (instance)
  > namespacing
  > static / non-static
  > properties / methods
  > access modifiers
  > magic methods
  > encapsulation

  > inheritance
  > abstraction
  > abstract classes
  > inetrfaces
  > traits

  > overriding
  > overloading
  > polymorphism

  > SOLID
  > design patterns
  > packages / PSR
  > composer




  RULE1: 
   xxxxx.php: functions, variables, classes, structures
   !!! NEVER CLOSE THE TAG

  RULE2:
   use closing tag ?> ONLY in template files !!!





   index.php
    |
    +-- include
            ^
            |
            +-- lib.php
                  |
                  <?
                    ...
                    header()...
                    cookie()...
                    ...
                  ?>
                  \n






class:
  > box / container (static) - grouping properties and methods
  > blueprint for creating objects / instances



UserOne         +---> class
   |            |
+--+------------+-+
| $username = ... |
| $is_online = .. |
| printInfo()     |
+-----------------+


UserTwo         +---> class
   |            |
+--+------------+-+
| $username = ... |
| $is_online = .. |
| printInfo()     |
+-----------------+





HW1:
    create two files

    index.php -> main file
    lib.php   -> library
     |
     declare a class named Post:
        properties: title, body, author, publisedAt...
        method: 
            renderAsHTML() -> return the HTML equivalent of the post
            renderAsXML()  -> return the XML equivalent of the post
            renderAsJSON() -> return the JSON equivalent of the post





 ClassName
   |
+--+-------------+
|                |
|  static        | --- new instance { ... } ---> non-static
|                | --- new instance { ... } ---> non-static
|                | --- new instance { ... } ---> non-static
|                |
|                |
+----------------+










ClassName
   |
+--+-----------------+                           custom
|                    |                             |
|                    |                             v
|                    | --- new Style() ---> __constructor() ---> { ... }
|                    |        |                    ^
|                    |        +------- $this ------+
|                    |
+----+---------------+
     |
    blueprint
     |
     v                                         ^
    +---------------+                          |
    |               |                          |
    |  $background  |+-------------------------+
    |  $color       |+-------------------------+
    |  $padding     |+-------------------------+     
    |               |
    +----+----------+










#style1->toCSS()
   ^    {
 $this ----->   
        }



#style2->toCSS()
   ^    {
 $this ----->   
        }














HW1:
    define class Profile
                  |
                  +-- name
                  +-- avatar
                  +-- ...

    define a constructor  
    define a toHTML()   

    create a few profile objects and render them on the page  
















# ENCAPSULATION


 > access modifier
 > get/set


+-------+
| unit --- getUnit() --->
| unit  |
| unit <-- setUnit($unit) ---
+-------+









$link->text = "..."
        |                            |
        +--------------- set value --------> __set($name, $value)
                                     |                      |
                                     |                      v
print( $link1->text )                |            private $text
                 ^                   |                      v
                 |                   |                      |
                 +------ get value --------  __get($name) --+
                                     |
                                     |
                                     |       __toString()
                                     |           |
                    <- to string ----------------+
                                     |








# Inheritance





 > DRY - Don't Repeat Yourself
 > Families of Classes
 > Abstraction
 > Polymorphism
 > SOLID
 


 ------------------------------------------------

HW1: add another product named DeliveryServices + improvise, test


Item (Parent / Superclass)
 |               
 +-- name                
 +-- image               
 +-- price              
-----------------------
 ^
 |
 extends
 |
 +--------------------+               
 |                    |
Food                 Drink      (Subclasses / Derived / Child)   <------ Objects ???
 |                    |  
 +-- weight           +-- volume   
 






















# VSCODE









vscode <--------> extesion (php) <--------- config ---------> PHP interpreter
  ^                                            ^
  |                                            |
  v                                            +-- global
index.php                                      |
                                               +-- user
                                               +-- profile
                                                      |
                                                      +-- settings.json
                                                             |
                                                             +-- php.executablePath
                                                                        |
                                                                        +-- 1) make shortcut ----> container
                                                                        +-- 2) install locally php-8.3 & copy path
                                               











# Home Appliances / e-shop


 > advanced OOP
 > code-spliting / namespace
 > encapsilation
 > typing
 > inheritance
 > association




+----------------------------------------------------+
|    (AC) Appliance                                  +-- encapsulation (private)
|            |                                       |
|            +-- id        <--+-  __construct()      |
|            +-- name      <--+-  __construct()   <----------+
|            +-- price     <--+-  __construct()      |       |
+----------------------------------------------------+       |
             ^                                               |
             |                                               |
-----------------^---------|----- inheritance                |
             ^   | set     v get                             |
             |                                               |
         (C) TV                                              |
             |                                               |
             +-- diagonal  <-- __ construct()                |
                                   parent::__construct()  ---+

                                   $this->diagonal = $diagonal


(С) Money
      |
      +-- amount
      +-- currency









(C) Length
      |
      +-- value
      +-- unit














association (objects)




      tv (TV)
       |
       +-- id    (int)
       +-- name  (string)
       +-- price (Money)
       |     |
       |     +-- amount
       |     +-- currency
       |
       --------
       |
       +-- duagonal (Length)
            |
            +-- value (int|float)
            +-- unit  (Enum)















index.php
  ^
  |
  +-- src/TV.php
  |     ^
  |     |
  |     +-- ./src/Appliance.php
  |
  +-- src/Appliance.php
  +-- src/Money.php








# value <vs> reference



 > copy, value, clone


int, float, boolean, string, ...




original        int
  |              v
+-+--------------+-+
|             1000 |
+-+----------------+


copy            int
  |              v
+-+--------------+-+
|             1001 | <---- copy++
+-+----------------+







                  $argument (1000) ------> [1000]
                    |
                   copy
                    |
increment           |   +-------> [1001]
    |               v  /
+---+-----------($value)--+
|                   |     |
|                   v     |
|             $value++    | 
|                   |     |
|                return   |
|                   |     |
+-------------------|-----+
                    |
                   copy
                    |    +------> [1001]
                    v   /
                  $result






              $argument (1001) --->  [1001]
                    |
                $original              ^
                    |                  |
increment           |   +--------------+
    |               v  /
+---+----------(&$value)--+
|                   |     |
|                   v     |
|             $value++    | (1001)
|                   |     |
|                return   |
|                   |     |
+-------------------|-----+
                    |
                   copy
                    |
                    v
                  $result









 > namespace

 index.php
  ^
  |
  +--/ Length.php
  |       |
  |       +-- Length
  |              |
  |              +-- Units (enum)
  |              +-- Length (class)
  |
  +--/ Volume.php
          |
          +-- Volume
                 |
                 +-- Units (enum)
                 +-- Length (class)












         order <Order>
          |
          |
          +-- items <array>
                |
                +-- 0 - <Item>                +------------------ $tv
                |           |                 v                    ^
                |           +-- product  --> <Appliance>           |
                |           +-- quantity --> <int>              changes
                |
                |
                +-- 1 - ...
        












# interface + traits








(AC) Product
      +-- name
      +-- price
------------
  ^
  |
  +----------------------+-----------------+ 
  |                      |                 |
  |                      |                 |
  (C) TV                 |                 |
       +- diagonal       |                (C) Orange
       ^                 |                    +- weight
       |                 |                    +- period
       +- SwitchingTrait |
            |       |    |
            |       +-> (C) WashingMachine
            |               +- volume
            v
      (C) Client
                           


        



















