




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