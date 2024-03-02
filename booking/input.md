








# PHP / how to read data ?

    > why can't php directly read data from a user ?


                     web browser                                        web server
                 +------------------------+                       +---------------------------+
                 |                        |     HTTP              |                           |
                 |                        |                       |     ?temp=10              |
                 |                        |                       |         v                 |
                 |                        |                       |       process             |
                 |                        |                       |         v                 |
                 |                        |                       |      variable             |
                 |                        |   GET                 |         v                 |
                 |                        |  req/input.php?temp=10|      input.php            |
                 |                        |------------ [BBBB:HH]>|    +----------+           |
   user ----->   |                        |    res                |    |          |           |
                 |                        |<----------- [HH:BBBB]-|    |          |           |
                 |                        |                       |    |          |           |
                 |                        |                       |    +----------+           |
                 |                        |                       |                           |
                 |                        |                       |                           |
                 +------------------------+                       +---------------------------+






Query String Parameters


script_url?temp=10&sky=clouds&...