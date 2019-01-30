<?php
/**
 * Created by PhpStorm.
 * User: stanislav
 * Date: 21.12.18
 * Time: 19:41
 */

namespace App\Helpers;


use Symfony\Component\DomCrawler\Crawler;

class ParserStackOverflow
{
    public function index($tag)
    {
        $result = [];
        for ($page = 1; $page < 6; $page++) {
            $link = 'https://stackoverflow.com/questions/tagged/' . $tag . '?sort=newest&page=' . $page . '&pagesize=15';
            $html = file_get_contents($link);
            $crawler = new Crawler(null, $link);
            $crawler->addHtmlContent($html, 'UTF-8');
            $title = $crawler->filter('h3 .question-hyperlink')->each(function ($node) {
                return $node->text();
            });
            $links = $crawler->filter('h3 .question-hyperlink ')->each(function ($node) {
                return $node->attr('href');
            });
            $vote = $crawler->filter('.vote')->each(function ($node) {
                return $node->text();
            });
            $answers = $crawler->filter('.status')->each(function ($node) {
                return $node->text();
            });
            $views = $crawler->filter('.views')->each(function ($node) {
                return $node->text();
            });
            $date = $crawler->filter('.user-action-time span')->each(function ($node) {
                return $node->attr('title');
            });
            for ($id = 0; $id < 15; $id++) {
                if (!empty($links[$id])) {
                    $result['link'] = $links[$id];
                    $result['title'] = $title[$id];
                    $result['vote'] = trim(str_replace(["\r\n", "votes", "vote"], '', $vote[$id]));
                    $result['answer'] = trim(str_replace(["\r\n", "answers", "answer"], '', $answers[$id]));
                    $result['view'] = trim(str_replace(["\r\n", "views", "view"], '', $views[$id]));
                    $result['parser_date'] = trim(str_replace("Z", '', $date[$id]));
                    $fullResult[] = $result;
                } else {
                    $fullResult[] = 0;
                    break;
                }
            }
        }
        return array_reverse($fullResult);
    }
}
