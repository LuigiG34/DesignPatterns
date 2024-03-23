<?php

use App\Creational\Builder\Builder\MysqlQueryBuilder;
use App\Creational\Builder\Builder\PostgresQueryBuilder;
use App\Creational\Builder\Interface\SQLQueryBuilder;

function clientCode(SQLQueryBuilder $queryBuilder)
{
    $query = $queryBuilder
        ->select("users", ["name", "email", "password"])
        ->where("age", 18, ">")
        ->where("age", 30, "<")
        ->limit(10, 20)
        ->getSQL();

    echo $query;
}

echo "Test MySQL builder:\n";
clientCode(new MysqlQueryBuilder());

echo "\n\n";

echo "Test PostgresSQL builder:\n";
clientCode(new PostgresQueryBuilder());