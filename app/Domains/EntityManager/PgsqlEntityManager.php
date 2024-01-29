<?php

declare(strict_types=1);

namespace App\Domains\EntityManager;

use Illuminate\Support\Facades\DB;

class PgsqlEntityManager implements ConcreteEntityManagerInterface
{
    public function flush(Entity $entity, string $name): void
    {
        DB::table($name)->insert($entity->toArray());
    }
}
