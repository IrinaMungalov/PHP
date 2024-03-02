









# PHP basics / flow control

    * branching:
        - if/else
        - switch/case
        - ?:

    * looping:
        - for, forEach
        - while
        - do while

                          +---*----->                 VM
                         /                            v
     start              ?                  ?         end
x-----*====*=====*======*===...============*==========*--------> time
           |     |      |                  |
           ins1  ins2   ins3...            insN
                         ^                /
                         +---------------+

















## PHP / FLOW



                                        res
        req                              ^
         v                               |
x--------*=======*=======*=======*=======*---------------> time
         start   |       |       |       end
                 |       |       |       
                 $n = 1  |       print($n)
                         $n++



            execution
             |
         s   v   e         s       e
x--------*=======*---------*=======*----------->
                      ^
                      |
                    "sleep"









                            req
user1 (US) / chrome v100 --------->

                                                                user1           user2
                                         index.php    x-------*=======*-------*=======*------->

                            req
user2 (MD) / chrome v101 --------->








                           req
user1 (US) / chrome v100 --------->

                                                                  $n            
                                                       x-------*=======*------->

                                         index.php    
                                                                  $n           
                                                       x-------*=======*------->

                            req
user2 (MD) / chrome v101 --------->








x start
|
|
*-- const TICKET_PRICE = 100.50
|
*-- const DISCOUNT_L   = 300.00;
|
*-- const DISCOUNT_P   = 20;
|
*-- $quantity = 2;
|
*-- $quantity * TICKET_PRICE ---> R
|
*-- $total = R
|
*-- $total > DISCOUNT_L ? ---- true --+
|                                     |
false                               100 - DISCOUNT_P -> R
|                                     |
|                                   $total * R -> R
|                                     |
|                                   R / 100
|                                     |
|                                   $total = R
+<------------------------------------+
|
+-- print($total) 
|
x end




if/else


if ( epression ) {
    // code to do if TRUE
} else {
    // code do to if FALSE
}




/*

else ~ if ( !epression ) {
    // code do to if FALSE
}

*/



HW1: update the diagram


 x start
 |
 v
$temp = rand(-50, 100)
 |
 v
print($temp)
print(" ")
 |
$temp >= 18 ? ---- false --+
 |                         |
true                       v
 |                        print("Cold)
print("Warm)               |
 |                         |
 v                         |
 +<------------------------+
 |
 |
 |
 v
 x end














x start
 |
 v
$ad_views = rand(0,5)
 |
 v
print($ad_views)
 |
$$ad_views < 4 ? ---- false --+
 |                            |
true                          |
 |                            |
print("NEW ...)               |
 |                            |
 v                            |
 +<---------------------------+
 |
 |
 v
 x end




switch ( $variable ) {

    case CONST_VALUE1: // $variable == CONST_VALUE1
        code;
    break;
    case CONST_VALUE2:
        code2;
    break;
    case CONST_VALUE3:
        code3;
    break;

    ...

    default:
        code_default;
    break;
}










x start
 |
...
 |
switch ($day) - 4
 |
 +-- 1 --> print("Mo") -- break -->+
 |                                 |
 +-- 2 --> print("Tu") -- break -->+
 |                                 |
 +-- 3 --> print("Wd") -- break -->+
 |                                 |
 +-- 4 --> print("Th")             +
 |              v                  |
 +-- 5 --> print("Fr") -- break -->+
 |                                 |
 +-- 6 --> print("Sa") -- break -->+
 |                                 |
 +-- 7 --> print("Su") -- break -->+
 |                                 |
 +-- default --> print("Wrong...")>+
 |                                 |
 +<--------------------------------+
 |
 v
 x end













 