<?php

declare(strict_types=1);

namespace App\Domains\Feedback\Controllers;

use App\Domains\EntityManager\EntityFactory;
use App\Domains\EntityManager\EntityManager;
use App\Domains\Feedback\FeedbackEntity;
use App\Domains\Feedback\Requests\SaveFeedbackRequest;
use App\Domains\Feedback\ValueObjects\Name;
use App\Domains\Feedback\ValueObjects\Phone;
use App\Domains\Feedback\ValueObjects\Text;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class SaveFeedbackController extends Controller
{
    public function __invoke(SaveFeedbackRequest $request, EntityManager $em, EntityFactory $entityFactory): JsonResponse
    {
        $name = Name::from($request->name);
        $phone = Phone::from($request->phone);
        $text = Text::from($request->text);

        $feedback = $entityFactory->create(FeedbackEntity::class);
        $feedback
            ->setPhone($phone)
            ->setName($name)
            ->setText($text)
        ;

        $em->flush($feedback);

        return new JsonResponse($request->all());
    }
}
