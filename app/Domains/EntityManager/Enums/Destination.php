<?php

declare(strict_types=1);

namespace App\Domains\EntityManager\Enums;

use App\Domains\EntityManager\FileEntityManager;
use App\Domains\EntityManager\PgsqlEntityManager;

enum Destination: string
{
    case POSTGRESQL = PgsqlEntityManager::class;
    case FILE = FileEntityManager::class;
}
