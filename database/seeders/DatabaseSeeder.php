<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ParsingResource;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        ParsingResource::create([
            'link' => 'https://www.rbc.ru/',
            'class_list'=> 'news-feed__item',
            'class_block' => 'l-col-main',
            'classes_to_filter' => 'article__header__info-block,article__header__title,article__main-image,article__inline-item,article__padding-off'
        ]);

        ParsingResource::create([
            'link' => 'https://eda.ru/media/recepty',
            'class_list'=> 'widget-list-vertical__item',
            'class_block' => 'article-page',
            'classes_to_filter' => 'advertizing__adcenter'
        ]);
    }
}
