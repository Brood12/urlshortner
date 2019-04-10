# urlshortner
    The project is intend to create a short url.
    the algorithm used in this project is similar to the algo used in bit.ly and tiny.url

# Getting Started 

    These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

# Prerequisites

    Befor cloning the project please install the below list of software on you local machine 
    
    1)linux Machine - lamp server.  
        for installation guide follow the below link:
        https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-18-04
    
    2) enable rewrite mod by below command
     sudo a2enmod rewrite

    3)windows machine :- Simply download xampp or wampp server on your machine and clone the project folder in (htdoc for xampp and www for wamp server)
        installation guide for above required software is as follows:

        http://www.finalhints.com/how-to-run-xampp-and-wamp-on-your-local-computer/ 

    4) Create a database with name website and then create a table with the name links which contains column as id which is primary key and not null , url varchar(255) default null , code varchar(255) default null and create_time with datetime as datatype

    5) use ALTER TABLE links AUTO_INCREMENT = 1000000000;
    hit this query before performing any insert operation 
    Reason for above query is that in the code to generate unique id is being generated using base_convert() function in php.

# Installing

    Please follow all the Prerequisites mentioned above.
    If runnig on linux machine with apache2 serve you need to create a apache2 server conf file which points to actual folder
    you can create a conf file in below path
    1) Go to /etc/apache2/site-avaliable 
    2) use cp command to copy the content of 000-default.conf to local.example.com.conf
    3) Then open the newly created file in vim editor or whichever editor with admin rights
    4)After the above process is done use the below command 
    sudo a2ensite example.com.conf
    5)make a host entry with below command
    sudo vim /etc/hosts
    add the line 127.0.0.1 local.example.com
    6)Restart the apache2 server 
    7)try to access the newly created project with whatever url being defined in apache2 conf file

# Built With

    Core php 
    Mysql
    Jquery 
    Ui -> Html , Bootstrap

# Deployment

    Follow all the installing steps to deploy the code on production environment.



    


