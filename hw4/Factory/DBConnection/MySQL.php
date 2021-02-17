<?php


class MySQL extends Connection
{
    function connect()
    {
        $mysqlConn = mysqli_connect( 'test', 'test', 'test', 'test' );
        return $mysqlConn;
    }
}