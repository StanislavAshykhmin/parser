<?php
/**
 * Created by PhpStorm.
 * User: stanislav
 * Date: 15.01.19
 * Time: 14:20
 */

namespace App\Helpers;



use App\Enums\StatusType;
use App\Model\Dashboard\System;
use App\Model\Parser\Site;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\DomCrawler\Crawler;

class ParserCmsSite
{
    public function getContent($cms){
        System::create([
            'name' => $cms,
        ]);
        $link = '/public/systems/'.$cms.'.csv';
        $file = Storage::get($link);
        $urls = explode("\n", $file);
        $urls = array_diff($urls, array(''));
        foreach ($urls as $url){
                try {
                    $html = $this->get_web_page($url);
                    $crawler = new Crawler(null, $url);
                    $crawler->addHtmlContent($html['content'], 'UTF-8');
                    $lang = $crawler->filter('html')->each(function ($node) {
                        return $node->attr('lang');
                    });
                    $text = preg_match('/[A-Za-z0-9._%+-]+\@[A-Za-z0-9.-]+\.[A-Za-z]{2,6}/', $crawler->text(), $email);
                    if (empty($email)) {
                        $status = StatusType::EmailNotFound;
                    } elseif (empty($lang)) {
                        $status = StatusType::LangNotFound;
                    } else {
                        $status = StatusType::NotProcessed;
                    }
                    $saveSite = System::where('name', $cms)->first();
                    $saveSite->sites()->create([
                        'url' => $url,
                        'lang' => implode('', $lang),
                        'status' => $status,
                    ]);
                    if ($email) {
                        $saveEmail = Site::where('url', $url)->first();
                        $saveEmail->contacts()->create([
                            'email' => implode('', $email),
                        ]);
                    }
                } catch (\Exception $e) {
                    $saveSite = System::where('name', $cms)->first();
                    $saveSite->sites()->create([
                        'url' => $url,
                        'lang' => implode('', $lang),
                        'status' => StatusType::NotAvailable,
                    ]);
                    echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
                }
            }
    }

    public function get_web_page( $url )
    {
       // $user_agent='Mozilla/5.0 (Windows NT 6.1; rv:8.0) Gecko/20100101 Firefox/8.0';

        $options = array(

            CURLOPT_CUSTOMREQUEST  =>"GET",        //set request type post or get
            CURLOPT_POST           =>false,        //set to GET
           // CURLOPT_USERAGENT      => $user_agent, //set user agent
          //  CURLOPT_COOKIEFILE     =>"cookie.txt", //set cookie file
         //   CURLOPT_COOKIEJAR      =>"cookie.txt", //set cookie jar
            CURLOPT_RETURNTRANSFER => true,     // return web page
            CURLOPT_HEADER         => false,    // don't return headers
            CURLOPT_FOLLOWLOCATION => true,     // follow redirects
            CURLOPT_ENCODING       => "",       // handle all encodings
            CURLOPT_AUTOREFERER    => true,     // set referer on redirect
            CURLOPT_CONNECTTIMEOUT => 60,      // timeout on connect
            CURLOPT_TIMEOUT        => 60,      // timeout on response
            CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
        );

        $ch      = curl_init( $url );
        curl_setopt_array( $ch, $options );
        $content = curl_exec( $ch );
        $err     = curl_errno( $ch );
        $errmsg  = curl_error( $ch );
        $header  = curl_getinfo( $ch );
        curl_close( $ch );

        $header['errno']   = $err;
        $header['errmsg']  = $errmsg;
        $header['content'] = $content;
        return $header;
    }
}
