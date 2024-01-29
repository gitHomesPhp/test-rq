<?php

declare(strict_types=1);

namespace App\Domains\Feedback\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveFeedbackRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => '',
            'phone' => '',
            'text' => '',
        ];
    }
}
