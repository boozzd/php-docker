<?php
// lox syka
// phpinfo();
try{
    $dbh = new pdo( 'mysql:host=172.17.0.100;dbname=test',
                    'root',
                    'password',
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    die(json_encode(array('outcome' => true)));
}
catch(PDOException $ex){
    die(json_encode(array('outcome' => false, 'message' => 'Unable to connect', 'bla' => $ex->getMessage())));
}