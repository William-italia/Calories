<?php



function connect()
{
    global $host, $dbname, $user, $pass;

    try {
        $pdo = new \PDO("mysql:host=localhost;dbname=calories;charset=utf8", 'root', 'root');
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);

        return $pdo;
    } catch (\PDOException $e) {
        echo 'Erro de conexão: ' . $e->getMessage();
        return null;
    }
}

function create()
{
}

function find()
{
}

function all($table)
{

    $pdo = connect();

    $sql = "SELECT * FROM {$table}";
    $list = $pdo->query($sql);

    $list->execute();

    return $list->fetchAll();
}
