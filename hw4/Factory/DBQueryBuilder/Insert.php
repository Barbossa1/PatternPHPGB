<?php


class Insert extends QueryBuilder
{
    function insert($tblName, $value)
    {
        $insert = "INSERT INTO '$tblName' (`name`)
                    VALUES ('$value')";
        return $insert;
    }
}