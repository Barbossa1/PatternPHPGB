<?php


class Delete extends QueryBuilder
{
    function delete($tblName)
    {
        $delete = "DELETE FROM '$tblName'";
        return $delete;
    }
}