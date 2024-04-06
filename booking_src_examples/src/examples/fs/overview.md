

$tours = [
    [
        'client_name' => 'John Doe...',
        'tour_id' => 1,
    ]
]







        x-------------- persistance / storage: files, database, sessions,... ------->
                                                ^
                                                |
                                            txt, csv, json, yaml, (*xml)

                   Name + 1 ticket              + 1 ticket
                    |                            |
              s     v    e                 s     v    e
              +-> $order-+                 +-> $order-+
              |          |                 |          |
      s   req |          v         s   req |          v
      +------>x---------+ e        +------>x----------+ e
      |                 |          |                  |
x-----x-----------------v----------x------------------v------------>
                        |                             |
                        v                             v
                      HTML                          HTML
                        |                             |
                        v                             v
                      window                        window











# PHP / fs



$file = fopen("./client.txt", "w")
   ^      |
   |      | create
   |      +---> client.txt
   |                |
   +----------------+




$file = fopen("./client.txt", "r")
    ^      |
    |      | find + open
    |      +---> client.txt
    |                |
    +----------------+









Linux (ubuntu/windows/macos)
  |
  |
  |   +-- git (dorinesinenco)
  |   |
  |   |   +-- vscode (mentor)
  |   |   |
  v   v   v
examples/fs/
  ^
  |
Linux (container)  <------ chmod -R 777 .







folder/
file
 ^
 |
 +-- owner



+ owner and others
+ write. read, execute (binary)
+ change mode









# Text Data Formats:

 - JSON
 - XML
 - YAML








       req
        |      webserver
        v      /
 +------------+----+
 |                 |
 |                 |
 |     php mod     |<--------- script.php
 |                 |
 |                 +-- extensions
 |                 |
 +-----------------+
         |
         v
        res