<?php
ini_set('memory_limit', '1024M');

require 'vendor/autoload.php';
//require_once "vendor/multi-array/MultiArray.php";
//require_once "vendor/fukuball/multi-array/Factory/MultiArrayFactory.php";
//require_once "vendor/fukuball/jieba-php/src/class/Jieba.php";
//require_once "vendor/fukuball/jieba-php/src/class/Finalseg.php";

use GuzzleHttp\Client;
use Fukuball\Jieba\Jieba;
use Fukuball\Jieba\Finalseg;

$client = new Client();
$response = $client->request('GET', 'https://hoolee.tw/akaonisteak');

$body = $response->getBody();


//print_r($body->getContents());

$contents=$body->getContents();

$contents_part_a = explode("post_header_title",$contents);

$contents_part_b = explode("quads-ad3",$contents_part_a[1]);

//print_r($contents_part_b[0]); 

Jieba::init();
Finalseg::init();

$seg_list = Jieba::cutForSearch(strip_tags($contents_part_b[0])); #搜索引擎模式
var_dump($seg_list);

exit;

