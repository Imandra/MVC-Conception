<?php

function sql_connect()
{
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
        return $pdo;
    } catch (PDOException $e) {
        die("Невозможно соединиться с базой данных, ошибка: ".$e->getMessage());
    }
}

function sql_query($sql)
{
    $pdo = sql_connect();
    $res = $pdo->query($sql);

    $ret = [];
    while (false !== $row = $res->fetch()) {
        $ret[] = $row;
    }
    return $ret;
}

function sql_exec($sql)
{
    $pdo = sql_connect();
    $pdo->exec($sql);
}