<?php

namespace Src\Builders\Implementations;

use Src\Builders\IQueryBuilder;

class PostgresQueryBuilder extends MysqlQueryBuilder
{
    public function limit(int $start, int $offset): IQueryBuilder
    {
        $this->query .= " LIMIT ". $start. " OFFSET ". $offset;
        return $this;
    }
}
