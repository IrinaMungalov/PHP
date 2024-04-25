







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
