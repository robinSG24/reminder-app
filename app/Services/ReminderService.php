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
    public function readReminder(array $request);

    /**
     * @inheritDoc
     * @param array $request
     * @return mixed
     */
    public function deleteReminder(array $request);

    /**
     * @inheritDoc
     * @param array $request
     * @return mixed
     */
    public function updateReminder(array $request);

    /**
     * @inheritDoc
     * @param array $request
     * @return mixed
     */
    public function upcomingReminderList(array $request);
}
