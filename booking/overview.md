









# WEB DEV in PHP

PHP. Basics / Level 1



1. xamp (old)
2. docker (new)







 +------------------------------------------+
 |                                          |
 |  +--------- PHP interpretor ----------+  |
 |  |                                    |  |
 |  |    8.3                             |  |           PHP source file <--------- IDE vscode
 |  |                                    | <---------- +---------------+
 |  |                                    |  |          |               |
 |  |                                    |  |          |               |
 |  |                                    |  |          |               |
 |  |                                    |  |          |               |
 |  |                                    |  |
 |  |                                    |  |
 |  +------------------------------------+  |
 +------------------------------------------+ 









  HOST machine (desktop / linux)

+--+-----------------------------------------------+
|                                                  |
|                                                  |
|    +-----------------------------------------+ <---------- docker container
|    |                     +- apache -------+  |    |
|    |    root dir.        | (webserver)    |  |    |
|    |  +--------------+   |                |  |    |
|    |  |              |   |1. serve static |  |    |
|    |  | index.html   |   |                <--------------- req --------- /index.html
|    |  |              |   |------------------------------- res ---------->
|    |  |              |   |                |  |    |
|    |  |  page.php    |   |2. mod php      |  |    |
|    |  |      |       |   |                <---------------- req -------- /page.php
|    |  |      |       |   |        +------------------------ res -------->
|    |  +------|-------+   |        |       |  |    |
|    |         v           |        |       |  |    |
|    |  +--------------+   |        |       |  |    |
|    |  | php inter.   |   |        |       |  |    |
|    |  +--------------+   |        |       |  |    |
|    |         |           +--------|-------+  |    |
|    |         +--------------------+          |    |
|    +-----------------------------------------+    |
|    |                                         |    |
|    |     OS (linux: bullseye, alpine)        |    |
|    |                                         |    |
|    +-----------------------------------------+    |
|                                                   |
+---------------------------------------------------+
|                                                   |
|                                                   |
|                OS (linux)                         |
|                                                   |
|                                                   |
+---------------------------------------------------+











  HOST machine (desktop / linux)
   |                                                                                   Dockerfile, docker-compose, ...
+--+------------------------------------------------------------------------------+            |
|                                                                                 |            |
|                                                                                 |            v
|    booking/(root)                  +-----------------------------------------+ <---------- docker pull ---------------------> HUB 
|      |                             |                     +- apache -------+  |   |           |                                 |
|      +-- src/ ------------------------> /var/www/html/   | (webserver)    |  |   |           |                                 v
|           |                        |  +--------------+   |                |  |   |         cache                          php:8.3-apache
|           +-- index.php            |  |              |   |1. serve static |  |   |
|                                    |  |   index.php  |   |                |  |   |
|                                    |  |      |       |   |                |  |   |
|                                    |  |      |       |   |                |  |   |
|                                    |  |      |       |   |2. mod php      |  |   |
|                                    |  |      |       |   |                <--------------- req -------- /index.php
|                                    |  |      |       |   |        +----------------------- res -------->
|                                    |  +------|-------+   |        |       |  |   |
|                                    |         v           |        |       |  |   |
|                                    |  +--------------+   |        |       |  |   |
|                                    |  | php inter.   |   |        |       |  |   |
|                                    |  +--------------+   |        |       |  |   |
|                                    |         |           +--------|-------+  |   |
|                                    |         +--------------------+          |   |
|                                    +-----------------------------------------+   |
|                                    |                                         |   |
|                                    |     OS (linux: bullseye, alpine)        |   |
|                                    |                                         |   |
|                                    +-----------------------------------------+   |
|                                                                                  |
+----------------------------------------------------------------------------------+
|                                                                                  |
|                                                                                  |
|                                        OS (linux)                                |
|                                                                                  |
|                                                                                  |
+----------------------------------------------------------------------------------+









x php:8.3-apache (HUB) initial image
|
|
|
+-- <----- + layer
|          COPY src/index.php ...
v
booking-php-image





            +------------ docker-compose (tool)
           /
          up <---- docker-compose.yml
         /              
        /
    docker (tool)
     |
     |
     |
     |
    run/start <------ Dockerfile | cli parameters
     |
     |
     v

  CONTAINER





## Syntax

  - php tag <?php code ?>
  - short tag <? code ?>
  - pronting tag <?= code ?>
  - flow tags
    <? control: ?>
      ...
    <? endcontrol ?>
  - instr1; instr2; ...
  - print(), echo







## Values

string
integer
float
boolean

array
object
null
resource