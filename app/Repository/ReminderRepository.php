<?php

namespace App\Repository;

use App\Models\Reminder;
use Carbon\Carbon;

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
     * @return mixed
     */
    public function createReminder($request)
    {
        return $this->reminderModel->query()->create($request);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function readReminder($id)
    {
        $reminder = $this->reminderModel->query()->where('id', $id)->first();
        $reminder->read_at = Carbon::now()->toDateTimeString();
        $reminder->save();

        return $reminder;
    }

    public function deleteReminder(int $id)
    {
        $reminder = $this->reminderModel->query()->where('id', $id)->first();
        return $reminder->delete();
    }

    public function updateReminder(int $id, array $request)
    {
        $reminder = $this->reminderModel->query()->where('id', $id)->first();
        $reminder->save($request);

        return $reminder;
    }

    public function upcomingReminderList($request)
    {
        return $this->reminderModel->query()->where('reminder_at', '>', Carbon::now()->toDateTimeString())->get();
    }

    public function reopenReminder($id)
    {
        $reminder = $this->reminderModel->query()->where('id', $id)->first();
        $reminder->reopened_at = Carbon::now()->toDateTimeString();
        $reminder->save();
        return $reminder;
    }

    public function markAsComplete($id)
    {
        $reminder = $this->reminderModel->query()->where('id', $id)->first();
        $reminder->is_complete = true;
        $reminder->save();
        return $reminder;
    }
}
