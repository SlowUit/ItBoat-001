<?php

require "php/rb-mysql.php"; // подсаединил библиотеку
R::setup( 'mysql:host=localhost;dbname=mydatabase',
        'user', 'password' ); //for both mysql or mariaDB  это подключение базы даных 