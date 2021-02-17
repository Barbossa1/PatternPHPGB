<?php

require 'DBConnection/Connection.php';
require 'DBConnection/MySQL.php';
require 'DBConnection/OracleSQL.php';
require 'DBConnection/PostgreSQL.php';

require 'DBQueryBuilder/QueryBuilder.php';
require 'DBQueryBuilder/Insert.php';
require 'DBQueryBuilder/Select.php';
require 'DBQueryBuilder/Delete.php';

require 'DBRecord/Record.php';

function test(QueryBuilder $queryBuilder)
{
    $queryBuilder->builder('Test', 'test');
}
