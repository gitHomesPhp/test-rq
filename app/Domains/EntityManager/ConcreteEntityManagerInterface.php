<?php

declare(strict_types=1);

namespace App\Domains\EntityManager;

interface ConcreteEntityManagerInterface
{
    public function flush(Entity $entity, string $name): void;
}
