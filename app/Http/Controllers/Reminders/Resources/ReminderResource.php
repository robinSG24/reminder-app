<?php

namespace App\Http\Controllers\Reminders\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ReminderResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'reminder_at' => Carbon::parse($this->reminder_at)->format('d-m-Y'),
            'content' => $this->content,
            'read_at' => $this->read_at != null ? Carbon::parse($this->read_at)->format('d-m-Y') : null,
            'is_complete' => (bool)$this->is_complete,
            'reopened_at' => $this->reopened_at != null ? Carbon::parse($this->reopened_at)->format('d-m-Y') : null
        ];
    }
}
