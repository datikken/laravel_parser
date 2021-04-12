<?php

namespace Database\Factories;

use App\Models\ParsingResource;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ParsingResourceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ParsingResource::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'link' => 'https://www.rbc.ru/',
            'class_list'=> 'news-feed__item',
            'class_block' => 'l-col-main',
            'classes_to_filter' => 'article__header__info-block,article__header__title,article__main-image,article__inline-item'
        ];
    }
}
