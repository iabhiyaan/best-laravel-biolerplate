<?php

use App\Models\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::truncate();
        $page = [
            ['title' => 'About Us', 'slug' => 'about-us', 'published' => '1'],
            ['title' => 'Message from principal', 'slug' => 'message-from-principal', 'published' => '1'],
            ['title' => 'Mission/Vision', 'slug' => 'mission-vision', 'published' => '1'],
            ['title' => 'Curriculum', 'slug' => 'curriculum', 'published' => '1'],
            ['title' => 'Exchange Program', 'slug' => 'exchange-program', 'published' => '1'],
            ['title' => 'Admission', 'slug' => 'admission', 'published' => '1'],
        ];
        Page::insert($page);
    }
}
