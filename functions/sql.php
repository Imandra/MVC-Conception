<?php

function sql_connect()
{
    mysql_connect('localhost', 'root', 'sf2015');
    mysql_select_db('test');
}

function sql_query($sql)
{
    sql_connect();
    $res = mysql_query($sql);

    $ret = [];
    while (false !== $row = mysql_fetch_assoc($res)) {
        $ret[] = $row;
    }
    return $ret;
}

function sql_exec($sql)
{
    sql_connect();
    mysql_query($sql);
}