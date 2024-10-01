




 # Booking project / v2.0

   + VCS: git
   > docker:
      - php  <--------------- image: php:8.3-apache <--------- HUB
                                ^
                                |
                              Dockerfile
                                |
                                +-- + gd / imagick (image processing)
                                +-- + composer (dev tool)
                                         |
                                         +-- composer init
                                         +-- class autoloading
                                         +- ...

                                +-- + mysqlnd
                                +-- + zlib
                                +-- + ...

      ? mysql/mariadb
      ? react













    +--------------------------------+
    |                                |
    |           apache-mod-php       <----- req HTTP /index.php --------
    |            V                   |
    | [php]  <---+                   |
    |            ^                   |
    |           CLI < input          |
    |                                |
    +--------------------------------+

















  #  COMPOSER








   > make easer templating

      * native php <tag><?= $variable ?></tag>
        - compex syntax
        - universal
        - blocks
        - security / XSS / injection
        - other DX features
        - caching

      * TEMPLATING ENGINE:
        + twig (Symfony, Drupal)
        + blade (Laravel)
        + wordpress (basics)




      TEMPLATE ENGINE

      [TEMPLATE/view] -------- render() -------> PAGE
                                  ^
                                  |
                                data + expressions











      composer require <vendor_id>/<package_id> 
                                        ^
                                        |
                                        +--- download dependencies









# BOOKING



 pattern: S.O.L.I.D. (OOP)
 pattern: MVT (MVC)
 pattern: ...

 + templating










BROWSER <--- res (HTML) <--- twig render('home.html.twig') <--- data <--- mysqli <--- docker <--- mariadb server
                                                                                                     ^
                                                                                                     |
                                                                                                    booking
                                                                                                     |
                                                                                                    tours
                                                                                                     |
                                                                                                    data







[HOST MACHINE]  localhost      <--- 13306:3306 -->  [mariadb]
                                                       ^
                                                       |
                                                       v
                               <--- 8088:80 ----->  [php]
                                                      ^
                                                      |
                                                     PDO('localhost')







  query parameter

  ?page=...


                        home
                       +-----> renderHome(...)
                      /
index.php ---------> ?
                      \ reviews
                       +-----> renderReviews(...)
                     ^
                     |  404
                     | -----> render404()
                     |
                   router



                   OPTOMOZATIONS:
                    - url: ?page=reviews -> /reviews (url rewrite) / webserver
                    - DRY: model (php)
                    - DRY: view (php)





ORM (Object Relational Mapper) / ODM / OGM
DDD (Domain / Entity (Model))




       <app>                   <db>

       Objects <--- map ---> DDL / DML











+------------------+
|   ACTIVE RECORD  |
+------------------+
  .
  1. model class: Tour

    1.1 properties (structure)
    1.2 init
    1.3 BREAD
        |  |
        |  +-- 1.3.A - save()
        +----- 1.3.B - getAll()

        dehydration
  2. object ------> raw SQL 

        hydration
  3. object <------ raw results







    // CLASS:
    // - OOP:
    //    - props + methods
    //    - class/interface/inheritance/abstraction
    //    - namespaces
    //    - traits
    //    - polymorphism
    //    - encapsulation
    //    - objects

    //    - SOLID
    //    - db: ORM, singleton, observer, active record
    // - CRUD / BREAD


  Model (bootstrap)
  ^  |
  |  +-- $pdo <----- new PDO(...)
  |
  +-- Tour
  +-- Client
  +-- Review







   src \Student\Booking
    |
    +-- \models
          |
          +-- Model.php
          |     |                                  src
          |     +-- models                          v
          |          Model class     -----> \Student\Booking\models\Model
          |     
          +-- Tour
          +-- Client
          .
          .
          .
     




\Student\Booking\ + ... custom classes
    ^                     |
    |                   models
   src/                   |
                        Model

                            ...
                            \PDO
                            ...











------------------ OOP --------------------

obj<Tour>
  |
  +-- id: int
  +-- title: string
  +-- price: Money
        |
        +-- amount
        +-- currency



------------------ DB ---------------------

tours:               money:
  id           +->    id
  title        |      amount
  price_id ----+      currency
  
