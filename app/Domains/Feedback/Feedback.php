<?php

declare(strict_types=1);

namespace App\Domains\Feedback;

use App\Domains\Feedback\Controllers\PageFeedbackController;
use App\Domains\Feedback\Controllers\SaveFeedbackController;
use Illuminate\Support\Facades\Route;

class Feedback
{
    public static function webRoutes(): void
    {
        Route::get('/', PageFeedbackController::class);
    }

    public static function apiRoutes(): void
    {
        Route::post('/feedback', SaveFeedbackController::class);
    }
}
