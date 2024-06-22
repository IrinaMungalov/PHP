








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




HW2: implement __isset() so it returns true only if link has a non-empty text and non-empty url























