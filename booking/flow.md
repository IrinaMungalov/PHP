









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
