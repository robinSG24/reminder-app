<?php

namespace App\Http\Controllers\Reminders;

use App\Http\Controllers\Reminders\Requests\ReminderRequest;
use App\Http\Controllers\Reminders\Resources\ReminderResource;
use App\Services\ReminderService;
use Illuminate\Http\Request;
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
     * marks the reminder read at time
     *
     * @param Request $request
     * @return ReminderResource
     */
    public function readReminder(Request $request)
    {
        $response = $this->reminderService->readReminder($request);

        return ReminderResource::make($response);
    }

    /**
     * Deletes the reminder w.r.t to id
     *
     * @param Request $request
     * @return ReminderResource
     */
    public function deleteReminders(Request $request)
    {
        $response = $this->reminderService->deleteReminder($request);

        return ReminderResource::make($response);
    }

    /**
     * Updates the reminder content or date.
     *
     * @param ReminderRequest $request
     * @return ReminderResource
     */
    public function updateReminder(ReminderRequest $request)
    {
        $response = $this->reminderService->updateReminder($request);

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
}
