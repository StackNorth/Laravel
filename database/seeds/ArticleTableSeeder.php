<?php
/**
 * Created by PhpStorm.
 * User: PHP
 * Date: 2017/1/10
 * Time: 12:58
 */
use Illuminate\Database\Seeder;
use App\Article;
class ArticleTableSeeder extends Seeder{
    public function run()
    {
        DB::table('articles')->delete();
        for ($i = 0;$i < 10;$i++)
        {
            Article::create(
                [
                    'title' => 'title'.$i,
                    'slug'  => 'slug'.$i,
                    'body'  => 'body'.$i,
                    'image' => 'image'.$i,
                    'user_id' => 1,
                ]
            );
        }

    }
}