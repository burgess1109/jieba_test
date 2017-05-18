<?php
ini_set('memory_limit', '1024M');

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Fukuball\Jieba\Jieba;
use Fukuball\Jieba\Finalseg;
use Fukuball\Jieba\JiebaAnalyse;

$client = new Client();
$response = $client->request('GET', 'https://hoolee.tw/akaonisteak');

$body = $response->getBody();

$contents=$body->getContents();

$contents_temp = explode("post_header_title",$contents);

$contents_explode = explode("quads-ad3",$contents_temp[1]);

$analysis_contents = strip_tags($contents_explode[0]); #過濾HTML字元
$analysis_contents = str_replace('nbsp', '', $analysis_contents);  

Jieba::init();
Finalseg::init();
JiebaAnalyse::init();

$seg_list = Jieba::cut(strip_tags($analysis_contents));
var_dump($seg_list);

$seg_list = Jieba::cutForSearch(strip_tags($analysis_contents)); #搜索引擎模式, 粒度比較細
var_dump($seg_list);

#關鍵詞提取
$top_k = 20;
$tags = JiebaAnalyse::extractTags($analysis_contents, $top_k);
var_dump($tags);
