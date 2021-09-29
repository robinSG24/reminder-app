<?php

namespace App\Services;

/**
 * Reminder Service houses all the services required respective of the reminders
 *
 * Interface ReminderService
 * @package App\Services
 */
interface ReminderService
{
    /**
     * @inheritDoc
     * @param array $request
     * @return mixed
     */
    public function createReminder(array $request);

    /**
     * @inheritDoc
     * @param array $request
     * @return mixed
     */
    public function readReminder(int $id);

    /**
     * @inheritDoc
     * @param array $request
     * @return mixed
     */
    public function deleteReminder(int $id);

    /**
     * @inheritDoc
     * @param array $request
     * @return mixed
     */
    public function updateReminder(int $id, array $request);

    /**
     * @inheritDoc
     * @param $request
     * @return mixed
     */
    public function upcomingReminderList($request);

    /**
     * @param int $id
     * @return mixed
     */
    public function markAsComplete(int $id);

    /**
     * @param int $id
     * @return mixed
     */
    public function reopenReminder(int $id);
}
