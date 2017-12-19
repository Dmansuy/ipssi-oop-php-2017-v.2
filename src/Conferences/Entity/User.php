<?php

declare(strict_types=1);

namespace Conferences\Entity;

final class User
{
    private $id;

    private $name;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getUserId() : string
    {
        return $this->id;
    }
    public function getUserName() : string
    {
        return $this->name;
    }
}
