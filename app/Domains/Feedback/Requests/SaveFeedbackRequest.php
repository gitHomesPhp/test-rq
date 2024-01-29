<?php

declare(strict_types=1);

namespace App\Domains\Feedback\Requests;

use App\Domains\Feedback\ValueObjects\Name;
use App\Domains\Feedback\ValueObjects\Phone;
use App\Domains\Feedback\ValueObjects\Text;
use Illuminate\Foundation\Http\FormRequest;

/**
 * @property string $name
 * @property string $phone
 * @property string $text
 */
class SaveFeedbackRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => Name::validate(),
            'phone' => Phone::validate(),
            'text' => Text::validate(),
        ];
    }
}
