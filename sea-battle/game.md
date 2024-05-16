







# PHP / mid / SEA BATTLE
    > basics
    > flow
    > structures
    > GET/POST HTTP
    > modules / includes
    > functions
    > files

    > multiplayer
    > hosting
    > docker
    > git

    >* oop basics
    >* psr, composer, libs 










# GAME / MAP
    > 2d array (indexed array)


    $map = [
        [1, 0, 0, 0, 0, 0, 0, 0, 0, 1],
        [0, 0, 0, 1, 0, 1, 0, 1, 0, 0],
        [0, 0, 0, 1, 0, 1, 0, 1, 0, 0],
        [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
        [0, 0, 0, 1, 0, 1, 0, 0, 0, 0],
        [0, 0, 0, 1, 0, 1, 0, 0, 0, 0],
        [0, 0, 0, 1, 0, 1, 0, 1, 0, 0],
        [0, 0, 0, 0, 0, 0, 0, 1, 0, 0],
        [0, 0, 0, 0, 0, 0, 0, 1, 0, 0],
        [1, 0, 0, 0, 0, 0, 0, 1, 0, 1],        
    ];








 # fix the refresh / shoot



 click
   |
   v
 +---+
 |<a>| ---- GET req /?shoot=6x6 ----+
 +---+                              |
                                    |
                                processing shoot
                                    |
                                    +-- header()
                                    |
                                   render
        Location: /                 |
          v                         |
        [HHH][BBBBB]                |
<----------- res -------------------+
/?shoot=6x6
|
v
------- redirect ---- GET req / ----+
                                    |
                                   render
                                    |
<----------- res -------------------+

















index.php
    |
    |
    |
    +-- < require_once 'lib.php'
    |                    |
    |                    +-- render_map()
    |
    +-- $map <-- load_map() <-- map.json
    |
    |
    +-- $coords = get_coords($_GET)
    |      |
    |      +-----------------+
    |                        v
    +-- $map = shoot($map,$coords)
    |      |
    |      +---------+-----+
    |                v     |
    +-- render_map($map)   |
    |              +-------+
    |              v 
    +-- save_map($map) ---> map.json













lib.php
  \
+--+----------+
|             |
|             |
|             |
|             |
|             |
+-------------+











    consumer (call)               provider (definition)   / SRP (Single Reponsability Principle)
                          | input
          +----- call ------------------------+
          |               |                   v
        f(args)           |   function render_map ($params) {
                          |     |
        ^                 |     +-- ins1
        |                 |     |
        |                 |     +-- ins2
        |                 |     .
        |                 |
        |                 |   }         | "<div>THIS IS THE MAP</div>"
        +---- return val ---------------+
                          | output
                          |
                          |
                          Interface








# one player / 2 maps


    SHIPS                     STATE
    0 - water                 0 - not shot
    1 - ship                  1 - shot
+---------------------+   +--------------------+           <------ shot -------
|  0 0 1 0 0          |   |  0 0 0 0 0 ...     |           ------ render ----->
|  ...                |   |  ...               |
|                     |   |                    |
|                     |   |                    |
|                     |   |                    |
|                     |   |                    |
|                     |   |                    |
+---------------------+   +--------------------+


# HW1: register the shot ---> map state