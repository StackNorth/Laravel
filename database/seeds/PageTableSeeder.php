<?php
/**
 * Created by PhpStorm.
 * User: PHP
 * Date: 2017/1/10
 * Time: 12:58
 */
use Illuminate\Database\Seeder;
use App\Page;
class PageTableSeeder extends Seeder{
    public function run()
    {
        DB::table('pages')->delete();
        for ($i = 0;$i < 10;$i++)
        {
            Page::create(
                [
                    'title' => 'title'.$i,
                    'slug'  => 'slug'.$i,
                    'body'  => 'body'.$i,
                    'user_id' => 1,
                ]
            );
        }

    }
}