<?php

namespace ORM\Db;

interface Connection
{
    public function exec($query, array $params);
    public function getError();
    public function quote($input);
}