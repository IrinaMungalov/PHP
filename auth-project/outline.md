





# Auth project
 LOGIC
  > signup
  > withdraw
  > authentification
  > login
  > logout

  > authorization
  > groups
  > roles
  > permissions

 TECH STACK:
  > ops
  > flow
  > functions
  > typehinting
  > strictures
  > globals ($_GET,...)
  > file io
  > cookies & sessions
   
  > git
  > docker

 ARCH:
  > SRP (SOLID)
  > modules (include/require)
  > model / domain (ddd)












                      array      functions
                        v           v
  user ------> model (structure, behavior)









 SRP - Single Responsability Principle


                       Interface   
                          |         
  CONSUMER                |     PROVIDER
                          |
  index.php               |
    |                     |
    +-- $user = [...]     |
         |                |
         |                |
         +--------+       |
                  v       |
  renderProfile($user) > call >  renderProfile         IN < array !!!>
      ^                   |        \                    v
      |                   |       +-+---------------( $user )---------+
      |                   |       | |                                 |
      |                   |       | v                                 |
      |                   |       | .                                 |
      |                   |       | $template = "{$user['username']}" |
      |                   |       |      v                            |
      |                   |       +------+----------------------------+   
      |                   |              |
      |                   |             return OUT < string !!!>
      |                   |              |
      +---------------------------<------+       


// structure
    $user = [
        'username' => 'johny77',
        'email' => 'johny77@example.host',
        'password' => '123456',
        'active' => true,
        'rating' => 4.5
    ];





# code split / modules


HW1: try to use either json or xml for training
     hint: user branches on git!


+-- index.php (main / entry point)
      ^
      |
    require
      |     
      +-- auth.php
            |
            +-- register()        <- r/w -> csv file
            +-- unregister()      <- r/w -> csv file
            +-- authenticate()    <- r/w -> csv file
            +-- login()           <- r/w -> csv file
            +-- logout()          <- r/w -> csv file
            |
            +-- search()          <- r/w -> csv file


      
      +-- user.php
            |
            +-- render()



