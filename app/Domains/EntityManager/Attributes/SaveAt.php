<?php

declare(strict_types=1);

namespace App\Domains\EntityManager\Attributes;

use App\Domains\EntityManager\Enums\Destination;
use Attribute;

#[Attribute(Attribute::IS_REPEATABLE | Attribute::TARGET_CLASS)]
class SaveAt
{
    public function __construct(
        public Destination $source,
        public ?string     $name = null,
    ) {}
}
