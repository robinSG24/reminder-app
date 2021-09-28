<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Reminder
 * @package App\Models
 */
class Reminder extends Model
{
    use HasTimestamps, SoftDeletes;

    public $table = 'reminder';
    public $fillable = [
        'content',
        'reminder_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
