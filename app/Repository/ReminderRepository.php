<?php

namespace App\Repository;

use App\Models\Reminder;
use Carbon\Carbon;
use Illuminate\Validation\ValidationException;

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
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model
     * @throws ValidationException
     */
    public function createReminder($request)
    {
        try {
            return $this->reminderModel->query()->create($request);
        } catch (\Exception $e) {
            throw ValidationException::withMessages(trans('messages.something_went_wrong'));
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object|null
     * @throws ValidationException
     */
    public function readReminder($id)
    {
        try {

            $reminder = $this->reminderModel->query()->where('id', $id)->first();
            $reminder->read_at = Carbon::now()->toDateTimeString();
            $reminder->save();

            return $reminder;
        } catch (\Exception $e) {
            throw ValidationException::withMessages(trans('messages.something_went_wrong'));
        }
    }

    /**
     * @param int $id
     * @return bool|mixed|null
     * @throws ValidationException
     */
    public function deleteReminder(int $id)
    {
        try {
            $reminder = $this->reminderModel->query()->where('id', $id)->first();
            return $reminder->delete();
        } catch (\Exception $e) {
            throw ValidationException::withMessages(trans('messages.something_went_wrong'));
        }
    }

    /**
     * @param int $id
     * @param array $request
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object|null
     * @throws ValidationException
     */
    public function updateReminder(int $id, array $request)
    {
        try {
            $reminder = $this->reminderModel->query()->where('id', $id)->first();
            $reminder->save($request);

            return $reminder;
        } catch (\Exception $e) {
            throw ValidationException::withMessages(trans('messages.something_went_wrong'));
        }
    }

    /**
     * @param $request
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     * @throws ValidationException
     */
    public function upcomingReminderList($request)
    {
        try {
            return $this->reminderModel->query()->where('reminder_at', '>', Carbon::now()->toDateTimeString())->get();

        } catch (\Exception $e) {
            throw ValidationException::withMessages(trans('messages.something_went_wrong'));
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object|null
     * @throws ValidationException
     */
    public function reopenReminder($id)
    {
        try {
            $reminder = $this->reminderModel->query()->where('id', $id)->first();
            $reminder->reopened_at = Carbon::now()->toDateTimeString();
            $reminder->save();
            return $reminder;
        } catch (\Exception $e) {
            throw ValidationException::withMessages(trans('messages.something_went_wrong'));
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object|null
     * @throws ValidationException
     */
    public function markAsComplete($id)
    {
        try {
            $reminder = $this->reminderModel->query()->where('id', $id)->first();
            $reminder->is_complete = true;
            $reminder->save();
            return $reminder;
        } catch (\Exception $e) {
            throw ValidationException::withMessages(trans('messages.something_went_wrong'));
        }
    }
}
