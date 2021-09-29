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
            'read_at' => Carbon::parse($this->read_at)->format('d-m-Y'),
            'is_complete' => (bool)$this->is_complete,
            'reopened_at' => Carbon::parse($this->reopened_at)->format('d-m-Y')
        ];
    }
}
