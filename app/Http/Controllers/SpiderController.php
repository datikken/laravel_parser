<?php

namespace App\Http\Controllers;

use Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\Client;
use App\Models\ParsingResource;
use App\Models\Article;

class SpiderController extends Controller
{
    public function parse_resources()
    {
        $rscs = ParsingResource::all();

        foreach($rscs as $rsc)
        {
            $classes_to_filter = explode(',',$rsc->classes_to_filter);

            $this->parse_resource($rsc->link, '.'.$rsc->class_list, '.'.$rsc->class_block, $classes_to_filter, $rsc->id);
        }

        return redirect('/');
    }

    /**
     * @param $link
     * @param $class_list
     * @param $class_block
     * @param $classes_to_filter
     * @param $resource_id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function parse_resource($link, $class_list, $class_block, $classes_to_filter, $resource_id)
    {
        $crawler = $this->create_crawler($link);
        $list_items_links_with_title = $this->parse_list($crawler, $class_list);

        dd($list_items_links_with_title);

        foreach($list_items_links_with_title as $item)
        {
            $crawler = $this->create_crawler($item['link']);
            $article = $this->parse_block($crawler, $class_block, $classes_to_filter);

            if(!empty($article))
            {
                $description = trim(mb_strimwidth(preg_replace("/\s+/", " ", preg_replace("/\r|\n/", "", strip_tags($article[0]))), 0, 200,"..."));

                Article::updateOrCreate([
                    'resource_id' => $resource_id,
                    'link' => $item['link'],
                    'title' => $item['title'],
                    'description' => $description,
                    'content'=> $article[0]
                ]);
            }
        }
    }

    /**
     * @param $link
     * @return Crawler
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function create_crawler($link)
    {
        $client = new Client();
        $res = $client->get($link);
        $text = $res->getBody()->getContents();

        return new Crawler($text);
    }

    /**
     * @param $crawler
     * @param $classToFind
     * @return mixed
     */
    public function parse_list($crawler, $classToFind)
    {
        return $crawler->filter($classToFind)->each(function($node) {
            $link = $node->filter('a')->attr('href');
            $title = $node->last()->text();

            return compact('link', 'title');
        });
    }

    /**
     * @param $crawler
     * @param $classToFind
     * @param $filters
     * @return mixed
     */
    public function parse_block($crawler, $classToFind, $filters)
    {
        foreach ($filters as $classToFilter) {
            $crawler->filter($classToFind . ' .' . $classToFilter)->each(function (Crawler $crawler) {
                foreach ($crawler as $node) {
                    $node->parentNode->removeChild($node);
                }
            });
        }

        return $crawler->filter($classToFind)->each(function (Crawler $crawler) {
            return $crawler->html();
        });
    }
}
