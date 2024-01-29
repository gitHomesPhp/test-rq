<?php

declare(strict_types=1);

namespace App\Domains\EntityManager;

use App\Domains\Feedback\FeedbackEntity;

class EntityFactory
{
    public function create(string $type): Entity
    {
        return match ($type) {
            FeedbackEntity::class => new FeedbackEntity,
            default => new FeedbackEntity,
        };
    }
}
