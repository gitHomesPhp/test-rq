<?php

declare(strict_types=1);

namespace App\Domains\EntityManager;

abstract class Entity implements EntityInterface
{
    abstract public function toArray(): array;
}
