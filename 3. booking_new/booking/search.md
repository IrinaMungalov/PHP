
    |
   GET
    |
    v
/?page=tours
    |
    v
   form
    |
    +-- method="POST"                   +------>    URL
    |                                   |            v
    +-- action="/?page=tours" --- POST req --->     /?search=sahara
    |                                   |
    +-- name="search"                   +------>  BODY "search=sahara" -------> tours.php
    |                                                                             |
    +-- SEARCH                                                                    v
                                                                                $_POST ?