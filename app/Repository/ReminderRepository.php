<?php

namespace App\Repository;

use App\Models\Reminder;

/**
 * Reminder Repository houses all the queries to interact with the model
 *
 * Class ReminderRepository
 * @package App\Repository
 */
class ReminderRepository
{
    /**
     * @var $reminderModel
     */
    public $reminderModel;

    /**
     * @param Reminder $reminder
     */
    public function __construct(Reminder $reminder)
    {
        $this->reminderModel = $reminder;
    }

    /**
     * @param $request
     */
    public function createReminder($request)
    {
        return $this->reminderModel->query()->create($request);
    }
}
