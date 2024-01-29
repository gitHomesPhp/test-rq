<?php

declare(strict_types=1);

namespace App\Domains\Feedback\Controllers;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response;

class PageFeedbackController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia::render('Index');
    }
}
