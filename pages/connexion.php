<?php

define('SERVER','mysql:server=localhost;dbname=pf');
define('LOGIN','root');
define('PASS','');

try{
$pdo = new PDO(SERVER,LOGIN,PASS);
}catch(Exception $e){
    echo $e->getMessage();
}