<?php

declare(strict_types=1);

namespace App\Domains\Feedback\ValueObjects;

class Text
{
    private function __construct(
        private readonly string $value
    ) {}

    public static function from(string $value): self
    {
        return new self($value);
    }

    public static function validate(): string
    {
        return 'required|string';
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
