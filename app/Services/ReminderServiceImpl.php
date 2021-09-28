<?php

namespace App\Services;

use App\Repository\ReminderRepository;
use Carbon\Carbon;
/**
 * ReminderServiceImpl houses all the service methods for reminder functionality
 *
 * Class ReminderServiceImpl
 * @package App\Services
 */
class ReminderServiceImpl implements ReminderService
{
    /**
     * @var $reminderRepo
     */
    public $reminderRepo;

    /**
     * @param ReminderRepository $repository
     */
    public function __construct(ReminderRepository $repository)
    {
        $this->reminderRepo = $repository;
    }

    /**
     * @param array $request
     */
    public function createReminder(array $request)
    {
        $request['reminder_at'] = Carbon::parse($request['reminder_at'])->toDateTimeString();
        return $this->reminderRepo->createReminder($request);
    }

    public function readReminder(array $request)
    {

    }

    public function deleteReminder(array $request)
    {
        // TODO: Implement deleteReminder() method.
    }

    public function updateReminder(array $request)
    {
        // TODO: Implement updateReminder() method.
    }

    public function upcomingReminderList(array $request)
    {
        // TODO: Implement upcomingReminderList() method.
    }
}
