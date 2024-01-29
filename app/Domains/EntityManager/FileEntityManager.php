<?php

declare(strict_types=1);

namespace App\Domains\EntityManager;

use Illuminate\Support\Facades\Storage;

class FileEntityManager implements ConcreteEntityManagerInterface
{
    public function flush(Entity $entity, string $name): void
    {
        Storage::disk('local')->append($name, json_encode($entity->toArray()));
    }
}
