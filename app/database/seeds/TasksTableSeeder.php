<?php
use Carbon\Carbon;

/**
 * Created by PhpStorm.
 * User: Zlil
 * Date: 29/09/2017
 * Time: 21:42
 */

class TasksTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->insertDummyTasks();
    }

    /**
     * Insert another tasks, so we can have a tasks for testing
     */
    private function insertDummyTasks()
    {
        $tasks = [
            [
                'description'     => 'Create Backend',
                'complete'        => 0,
                'active'          => 1,
                'created_at'      => Carbon::now(),
            ],
            [
                'description'     => 'Create Frontend',
                'complete'        => 0,
                'active'          => 1,
                'created_at'      => Carbon::now(),
            ],
            [
                'description'     => 'Take Kaya To The Vet',
                'complete'        => 0,
                'active'          => 1,
                'created_at'      => Carbon::now(),
            ],
            [
                'description'     => 'Set Up Git',
                'complete'        => 0,
                'active'          => 1,
                'created_at'      => Carbon::now(),
            ],
        ];

        Task::insert($tasks);
    }
}