<?php

namespace Tests\Feature;

use Tests\TestCase;

class ReminderTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * A create reminder feature test.
     *
     * @return void
     */
    public function testCreateReminder()
    {
        $response = $this->post('/api/reminder/create', [
            'content' => 'test-title',
            'reminder_at' => '01-02-2022 09:00'
        ]);

        $response->assertStatus(201);
        $response->assertJsonStructure([
            'data' => [
                'content',
                'reminder_at'
            ]]);
    }


    /**
     * A upcoming Reminder feature test.
     *
     * @return void
     */
    public function testUpcomingReminderAPI()
    {
        $response = $this->get('/api/reminder/upcoming');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'data' => [[
                'content',
                'reminder_at'
            ]]]);
    }

    /**
     * A upcoming Reminder feature test.
     *
     * @return void
     */
    public function testDeleteReminderAPI()
    {
        $request = [
            'content' => 'test-title',
            'reminder_at' => '01-02-2022 09:00'
        ];
        $data = $this->post('/api/reminder/create', $request);
        $response = $this->delete('/api/reminder/delete/' . $data->original->id);

        $response->assertStatus(200);
        $response->assertJson(['status' => 200, 'message' => trans('messages.reminder_deleted')]);
    }


    /**
     * A upcoming Reminder feature test.
     *
     * @return void
     */
    public function testUpdateReminderAPI()
    {
        $request = [
            'content' => 'test-title',
            'reminder_at' => '01-02-2022 09:00'
        ];
        $data = $this->post('/api/reminder/create', $request);
        $response = $this->put('/api/reminder/update/' . $data->original->id, $request);

        $response->assertStatus(200);
        $response->assertJson(['status' => 200, 'message' => trans('messages.reminder_updated')]);
    }

    /**
     * A upcoming Reminder feature test.
     *
     * @return void
     */
    public function testReadReminderAPI()
    {
        $request = [
            'content' => 'test-title',
            'reminder_at' => '01-02-2022 09:00'
        ];
        $data = $this->post('/api/reminder/create', $request);
        $response = $this->put('/api/reminder/read/' . $data->original->id);

        $response->assertStatus(200);
        $response->assertJson(['status' => 200, 'message' => trans('messages.reminder_read')]);
    }

    /**
     * A upcoming Reminder feature test.
     *
     * @return void
     */
    public function testCompleteReminderAPI()
    {
        $request = [
            'content' => 'test-title',
            'reminder_at' => '01-02-2022 09:00'
        ];
        $data = $this->post('/api/reminder/create', $request);
        $response = $this->put('/api/reminder/complete/' . $data->original->id);

        $response->assertStatus(200);
        $response->assertJson(['status' => 200, 'message' => trans('messages.reminder_completed')]);
    }

    /**
     * A upcoming Reminder feature test.
     *
     * @return void
     */
    public function testReopenReminderAPI()
    {
        $request = [
            'content' => 'test-title',
            'reminder_at' => '01-02-2022 09:00'
        ];
        $data = $this->post('/api/reminder/create', $request);
        $response = $this->put('/api/reminder/reopen/' . $data->original->id);

        $response->assertStatus(200);
        $response->assertJson(['status' => 200, 'message' => trans('messages.reminder_reopened')]);
    }
}
