<?php

namespace App\Http\Controllers\Reminders;

use App\Http\Controllers\Reminders\Requests\ReminderRequest;
use App\Http\Controllers\Reminders\Resources\ReminderResource;
use App\Services\ReminderService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Controller as BaseController;

/**
 * Reminder Controller houses all the methods related to the reminder functionality
 *
 * Class ReminderController
 * @package App\Http\Controllers\Reminders
 */
class ReminderController extends BaseController
{
    /**
     * @var $reminderService
     */
    public $reminderService;

    /**
     * @param ReminderService $reminderService
     */
    public function __construct(ReminderService $reminderService)
    {
        $this->reminderService = $reminderService;
    }

    /**
     * Creates Reminder for a given date
     *
     * @param ReminderRequest $request
     * @return mixed
     */
    public function createReminder(ReminderRequest $request)
    {
        $response = $this->reminderService->createReminder($request->validated());

        return ReminderResource::make($response);
    }

    /**
     * marks the reminder read time
     *
     * @param int $id
     * @param Request $request
     * @return mixed
     */
    public function readReminder(int $id)
    {
        $response = $this->reminderService->readReminder($id);

        return ReminderResource::make($response);
    }

    /**
     * Deletes the reminder w.r.t to id
     *
     * @param int $id
     * @param Request $request
     * @return mixed
     */
    public function deleteReminder(int $id)
    {
        $response = $this->reminderService->deleteReminder($id);

        return ['status' => 200, 'message' => trans('messages.reminder_deleted')];
    }

    /**
     * Updates the reminder content or date.
     *
     * @param int $id
     * @param ReminderRequest $request
     * @return mixed
     */
    public function updateReminder(int $id, ReminderRequest $request)
    {
        $response = $this->reminderService->updateReminder($id, $request);

        return ReminderResource::make($response);
    }

    /**
     * Retrieves list of upcoming reminders in the system
     *
     * @param Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function upcomingReminderList(Request $request)
    {
        $response = $this->reminderService->upcomingReminderList($request);

        return ReminderResource::collection($response);
    }

    public function markAsComplete(int $id)
    {
        $response = $this->reminderService->markAsComplete($id);

        return ReminderResource::collection($response);
    }

    public function reopenReminder(int $id)
    {
        $response = $this->reminderService->markAsComplete($id);

        return ReminderResource::collection($response);
    }
}
