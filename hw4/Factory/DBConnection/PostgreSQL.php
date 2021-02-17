<?php


class PostgreSQL extends Connection
{
    function connect()
    {
        $pg = pg_connect("host=sheep port=5432 dbname=mary user=lamb password=foo");
        return $pg;
    }
}