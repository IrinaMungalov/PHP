                                apache (web server)
------------ req ------------> +------------------+
                               |                  | - static serving
                               |                  | - dynamic serving
                               |                  |
                               |                  |
                               |                  |
                               |                  |
                               +------------------+
                                        ^
                                        |
                                        |
                                    .htaccess (config file)














<----------- res ----------------------- 404.php
              |
              +-- HEADER + status code
              +-- BODY: 404 NOT FOUND

<------- res -----------------------------------------
          HHHHH | BBBBBBBBBBBBBBBBBB








   req
    |
    v
    ?page=contacts
    |
    v
index.php
    +----- PHP < process $_GET['page']
    |
    ...
    ...isset($_GET['page'])
    ...
    ...isset($_GET['page'])
    |
    +--< include 'header.php
          ...isset($_GET['page'])












       