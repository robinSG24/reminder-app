<?php

namespace App\Http\Controllers\Reminders\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReminderResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'reminder_at' => $this->reminder_at,
            'content' => $this->content
        ];
    }
}
