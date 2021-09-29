<?php

namespace App\Http\Controllers\Reminders\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReminderResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'reminder_at' => $this->reminder_at,
            'content' => $this->content,
            'read_at' => $this->read_at,
            'is_complete' => (bool)$this->is_complete,
            'reopened_at' => $this->reopened_at
        ];
    }
}
