







# INPUT

    > no input
    > malicious code
    > wrong format






client                                  server


x----------------- data ---------------> $variable
















USER
|
/examples/validation.php (access the page)
|
v
BROWSER
|
v
x----------------- GET request /examples/validation.php ------> SERVER
                                                                   |
                                                          isset($_GET['rate]) ?
                                                                   v
                         +<-- Warning: Undefined... <-- $rate = $_GET['rate']
                         |                                         |
                         +<--                     <form> <---------+
                         |                          ...
x<------- response ------+                        </form>
|
v
BROWSER
v
render
v
WINDOW <------- USER clicks button
v
client side validation:
v 
x - required
? - pattern  - HW*: try to allow only x.x format [0.0 ... 5.0]
x-----------GET request /examples/validation.php?rate=3 -------> SERVER
                                                                   |
                                                          isset($_GET['rate]) ?
                                                                   |
                                                        is_numeric($_GET['rate']) ?
                                                                   |
                                                        preg_match('/[0-4]\.\d/', $_GET['rate']) ?          
                                                                   |
                                                        $rate = (float) $_GET['rate'] ?
                                                                   v
                         +<-- Warning: Undefined... <-- $rate = $_GET['rate']
                         |                                         |
                         +<--                     <form> <---------+
                         |                          ...
x<------- response ------+                        </form>



















            casting
new_value<--------------(type)value



















ASSOCIATIVE ARRAY   

$_GET = [
    'rate' => ...,
    'variable'=> ...,
]

