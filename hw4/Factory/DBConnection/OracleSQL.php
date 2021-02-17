<?php


class OracleSQL extends Connection
{
    function connect()
    {
        $oci = oci_connect('hr', 'welcome', 'localhost/XE');
        return $oci;
    }
}