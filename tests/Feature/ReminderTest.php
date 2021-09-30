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
    public function testdeleteReminderAPI()
    {
        $response = $this->get('/api/reminder/upcoming');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'data' => [[
                'content',
                'reminder_at'
            ]]]);
    }


}
