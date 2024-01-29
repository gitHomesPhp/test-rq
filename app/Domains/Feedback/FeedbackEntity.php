<?php

declare(strict_types=1);

namespace App\Domains\Feedback;

use App\Domains\EntityManager\Attributes\SaveAt;
use App\Domains\EntityManager\Entity;
use App\Domains\EntityManager\Enums\Destination;
use App\Domains\Feedback\ValueObjects\Name;
use App\Domains\Feedback\ValueObjects\Phone;
use App\Domains\Feedback\ValueObjects\Text;

#[SaveAt(Destination::FILE, 'feedback.store')]
#[SaveAt(Destination::POSTGRESQL, 'feedbacks')]
class FeedbackEntity extends Entity
{
    private ?Name $name;

    private ?Phone $phone;

    private ?Text $text;

    public function getName(): ?Name
    {
        return $this->name;
    }

    public function getPhone(): ?Phone
    {
        return $this->phone;
    }

    public function getText(): ?Text
    {
        return $this->text;
    }

    public function setName(?Name $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function setPhone(?Phone $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function setText(?Text $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name->getValue(),
            'phone' => $this->phone->getValue(),
            'text' => $this->text->getValue(),
        ];
    }
}
