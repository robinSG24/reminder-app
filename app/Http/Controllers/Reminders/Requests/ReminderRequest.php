<?php

namespace App\Http\Controllers\Reminders\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ReminderRequest validates the request parameters
 * @package App\Http\Controllers\Reminders\Requests
 */
class ReminderRequest extends FormRequest
{
    /**
     * @return string[]
     */
    public function rules()
    {
        return [
            'content' => 'required|string',
            'reminder_at' => 'date|required|date_format:d-m-Y H:i'
        ];
    }
}
