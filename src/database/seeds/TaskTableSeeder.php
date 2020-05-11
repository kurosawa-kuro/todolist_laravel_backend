<?php

use Illuminate\Database\Seeder;
use App\Task;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->add('title00', '2020-04-10 06:53:29','2020-04-10 06:53:29');
        $this->add('title01', '2020-04-10 06:53:29','2020-04-10 06:53:29');
        $this->add('title02', '2020-04-10 06:53:29','2020-04-10 06:53:29');
        $this->add('title03', '2020-04-10 06:53:29','2020-04-10 06:53:29');
    }

    private function add($title)
    {
        (new Task([
            'title' => $title,
        ]))->save();
    }
}
