CLIENT                        SERVER


+------- req ----------->    index.php
                                |
                                process:
                                1. logic
                                2. print into template
                                |
+<---------- res ---------------+
|
render
|
|    user clicks
v    /
window
|
+---- req /?quantity=2---->   index.php
                                |
                                process:
                                1. logic
                                2. print into template
                                |
+<---------- res ---------------+
|
window