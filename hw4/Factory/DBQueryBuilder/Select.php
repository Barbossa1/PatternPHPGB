<?php


class Select extends QueryBuilder
{
    function select($tblName, $value)
    {
        $select = "SELECT '$value' FROM '$tblName'";
        return $select;
    }
}