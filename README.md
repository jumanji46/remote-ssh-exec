# remote-ssh-exec
Simple (beginner-level) php script that allows a client to log in to a server and run predetermined ssh commands

Pre-requisites:
 - PHP 5.x or newer
 - Apache2 web server
 - libssh2 or php-ssh2
 
Usage:
 - place the php files in the Apache2 webserver (i.e. /var/www/html)
 - open the index.php file within the web environment
 - login to a remote server by inputing the server address, username and password in the form
 - edit ssh commands in the login.php script
 
Additional notes:
 - tested in Ubuntu 16.04 client environment using Apache2 service 
 - tested on Ubuntu 12.04, 14.04, 16.04 servers
 - error checking is very limited
 - includes some bootstrap styling
 - add more commands in the run.php
