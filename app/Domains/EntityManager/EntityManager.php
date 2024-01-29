<?php

declare(strict_types=1);

namespace App\Domains\EntityManager;

use ReflectionClass;

class EntityManager
{
    public function __construct(
        private readonly EntityManagerFactory $emFactory
    ) {}

    public function flush(Entity $entity)
    {
        $ref    =   new ReflectionClass($entity::class);
        $attrs  =   $ref->getAttributes();

        foreach ($attrs as $attr) {
            $args = $attr->getArguments();

            $em = $this->emFactory->create($args[0]->value);
            $em->flush($entity, $args[1]);
        }
    }
}
