<?php

namespace ORM\Db;

interface Adapter
{
    public function exec($query, array $params);

    public function getError();
}