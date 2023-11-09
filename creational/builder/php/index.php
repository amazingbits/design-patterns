<?php

use Src\Builders\Implementations\MysqlQueryBuilder;
use Src\Builders\Implementations\PostgresQueryBuilder;
use Src\Builders\IQueryBuilder;

require_once "./vendor/autoload.php";

function Main(IQueryBuilder $queryBuilder)
{
    $query = $queryBuilder
    ->select("tb_posts", ["slug", "title", "date"])
    ->where("title", "%this weekend%", "LIKE")
    ->limit(0, 10)
    ->getSqlQuery();

    echo $query;
}

// SELECT slug, title, date FROM tb_posts WHERE title LIKE %this weekend% LIMIT 0, 10
Main(new MysqlQueryBuilder());

echo "<br><br>";

// SELECT slug, title, date FROM tb_posts WHERE title LIKE %this weekend% LIMIT 0 OFFSET 10
Main(new PostgresQueryBuilder());
