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
     * @inheritDoc
     * @param array $request
     * @return mixed
     */
    public function createReminder(array $request)
    {
        $request['reminder_at'] = Carbon::parse($request['reminder_at'])->toDateTimeString();
        return $this->reminderRepo->createReminder($request);
    }

    /**
     * @inheritDoc
     * @param int $id
     * @return mixed|void
     */
    public function readReminder(int $id)
    {
        return $this->reminderRepo->readReminder($id);
    }

    /**
     * @inheritDoc
     * @param int $id
     * @return mixed|void
     */
    public function deleteReminder(int $id)
    {
        return $this->reminderRepo->deleteReminder($id);
    }

    /**
     * @inheritDoc
     * @param int $id
     * @param array $request
     * @return mixed|void
     */
    public function updateReminder(int $id, array $request)
    {
        $request['reminder_at'] = Carbon::parse($request['reminder_at'])->toDateTimeString();
        return $this->reminderRepo->updateReminder($id, $request);
    }

    /**
     * @inheritDoc
     * @param $request
     * @return mixed
     */
    public function upcomingReminderList($request)
    {
        return $this->reminderRepo->upcomingReminderList($request);
    }

    /**
     * @inheritDoc
     * @param int $id
     * @return mixed|void
     */
    public function markAsComplete(int $id)
    {
        return $this->reminderRepo->markAsComplete($id);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function reopenReminder(int $id)
    {
        return $this->reminderRepo->reopenReminder($id);
    }
}
