<?php

require_once __DIR__.'/../functions/sql.php';

function photo_get_all ()
{
    $sql = 'select * from images';
    return sql_query($sql);

    //это заглушка, без БД, просто вывод фейковых данных
    /*return [
        ['title' => 'Фото 1', 'path' => '/img/photo1.jpg'],
        ['title' => 'Фото 2', 'path' => '/img/photo2.jpg'],
        ['title' => 'Фото 3', 'path' => '/img/photo3.jpg'],
    ];*/
}

function photo_insert ($data)
{
    $sql = "insert into images (title, path) values ('".$data['title']."', '".$data['image']."')";
    sql_exec($sql);
}