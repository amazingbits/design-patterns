<?php

namespace Src\Builders;

interface IQueryBuilder
{
    public function select(string $table, array $fields): IQueryBuilder;
    public function where(string $field, string $value, string $operator = "="): IQueryBuilder;
    public function limit(int $start, int $offset): IQueryBuilder;
    public function getSqlQuery(): string;
}
