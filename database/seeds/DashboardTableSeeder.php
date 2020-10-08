<?php

use App\Models\Dashboard;
use Illuminate\Database\Seeder;

class DashboardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dashboard::truncate();
        $data = [
            'site_name' => 'Rose Business International',
        ];
        Dashboard::create($data);
    }
}
