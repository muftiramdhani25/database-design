<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            [
                "name" => "putih",
                "list_id" => 1,
                "user_id" => 1,
                "name" => "nonton video",
                "reminder_datetime" => date('Y-m-d H:i:s', time()),
                "due_date" => date('Y-m-d', time()),
                "attachment_url" => "https://github.com/muftiramdhani25/database-design",
                "note" => "Bismillah 100",
                "is_completed" => false,
                "is_my_day" => false,
                "created_at" => date('Y-m-d H:i:s', time()),
                "updated_at" => date('Y-m-d H:i:s', time())
            ],
        ]);
    }
}
