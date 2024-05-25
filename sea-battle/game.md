







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














# Sea Battle / matches

 app
  |
  +--- match_1
  |      |  
  |      +- state
  |      +- score
  |      +- startedOn
  |      +- endedOn
  |      +- ...
  |      |
  |      +-- player_1
  |      |       |
  |      |       +- name
  |      |       +- ...
  |      |       |
  |      |       +-- map_ship
  |      |       +-- map_state
  |      |
  |      +-- player_2
  |              |
  |              +-- map_ship
  |              +-- map_state
  |
  +--- match_2
  +--- match_3
  |
  .
  .
  .
  +--- match_N










  ----- GET req /match.php -----> match.php --+
                                              |
  +---------- res HTML -----------------------+   
  |
  FORM 1 --- POST req /login-action.php ---> +
                                               \
                                                +--> login-action.php
                                               /              |
  FORM 2 --- POST req /login-action.php ---> +                | 
                                                              |
                                                              +-- $username <--- $_POST['username']
                                                              +-- $username <--- $_POST['password']
                                                              |
                                                              +-- $users <---- load_users() < users.json
                                                              |
                                                              +--> user_exists($users,$username,$password)
                                                              |                      |
                                                              +-- $found <-----------+
                                                              |
                                                              |
                                                              |
                                                              v
                                                            $found ? ------------------------------+
                                                              |                                    |
                                                            true                                  false 
                                                              |                                    |
                                                              v                                    v
                                                                                        edirect(/match.php)    
                                                                                                   |
<----------------------------------- res ----------------------------------------------------------+
                                [HHHH][]
                                 ^
                                 |
                                header("Location: /match.php")












-------- GET req /create-account.php -------+
                                            |
+<----- res HTML ---------------------------+     
|
FORM (POST)
 |
 +-- username
 +-- password
 +-- password_confirm

 +------ POST req /register-action.php -----+
                                            v
                                          1. obtain form data
                                            v                                      ^    
                                          2. check password confirmation           |
                                            |                                   redirect
                                            v                                      |
                                          $password != $password_confirm ? - true -+
                                            |
                                            v
                                          false
                                            |














           FORM                ACTION
         s----------e         s-------------e
         |          v         |             v
x--------x=========>x---------x======x======>------------------>   
              ^          ^           |     
              |         here         |                      
              |                     redirect
              |                      |
              +----- ?message... ----+

                url params / query string