








# OOP / PHP

  !!! PHP > Java, TypeScript, C#, C++, ...
  !!! PHP > Angular, Vue, ...

  > class / object (instance)
  > namespacing
  > static / non-static
  > properties / methods
  > access modifiers
  > magic methods

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