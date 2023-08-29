<?php
namespace App\Models;

const DBDRIVE = 'mysql';
const DBHOST = 'localhost';
const DBNAME = 'mk_info';
const DBUSER = 'root';
const DBPASS = '';

class Database {


public static function createPDOConnection() {
    try {
        $connectionPDO = new \PDO(DBDRIVE.':host='.DBHOST.';dbname='.DBNAME, DBUSER, DBPASS);
        $connectionPDO->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $connectionPDO;
    } catch (\PDOException $e) {
        
        echo 'Erro de conexão: ' . $e->getMessage();
        return null;
    }
    }
}
?>
