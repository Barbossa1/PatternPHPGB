<?php


class Record
{
    function record($tblName)
    {
        $rec = "CREATE TABLE '$tblName' (`id`, `name`)";
        return $rec;
    }
}