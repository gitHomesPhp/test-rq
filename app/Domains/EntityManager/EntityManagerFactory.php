<?php

declare(strict_types=1);

namespace App\Domains\EntityManager;

class EntityManagerFactory
{
    public function create(string $type): ConcreteEntityManagerInterface
    {
        return match ($type) {
            FileEntityManager::class => new FileEntityManager,
            PgsqlEntityManager::class => new PgsqlEntityManager,
            default => new PgsqlEntityManager,
        };
    }
}
