<?php

namespace Src\Builders\Implementations;

use Src\Builders\IQueryBuilder;

class MysqlQueryBuilder implements IQueryBuilder
{
    protected string $query;

    protected function reset()
    {
        $this->query = "";
    }

    public function select(string $table, array $fields): IQueryBuilder
    {
        $this->reset();
        $this->query .= "SELECT " . implode(", ", $fields) . " FROM " . $table;
        return $this;
    }

    public function where(string $field, string $value, string $operator = "="): IQueryBuilder
    {
        $this->query .= " WHERE " . $field. " ". $operator. " ". $value;
        return $this;
    }

    public function limit(int $start, int $offset): IQueryBuilder
    {
        $this->query .= " LIMIT ". $start. ", ". $offset;
        return $this;
    }

    public function getSqlQuery(): string
    {
        return $this->query;
    }
}
