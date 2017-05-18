# Guzzle + Jieba 網頁內容斷詞測試

利用 Guzzle 去取得部落格內容, 再用 jieba 針對部落格內容斷詞及權重分析(詳test.php)

執行測試 : php test.php

權重分析結果:

```php

array(20) {
  '赤鬼' =>
  double(0.22390353264966)
  'XD' =>
  double(0.20524490492886)
  '附餐' =>
  double(0.16792764948725)
  '莎麗' =>
  double(0.16792764948725)
  'adsbygoogle' =>
  double(0.14926902176644)
  '小虎' =>
  double(0.13521294907128)
  '濃湯' =>
  double(0.13061039404564)
  '排隊' =>
  double(0.093293138604027)
  '不錯' =>
  double(0.093293138604027)
  '喜歡' =>
  double(0.093293138604027)
  '牛排' =>
  double(0.08265577040698)
  '小菜' =>
  double(0.077851579710443)
  '飲料' =>
  double(0.074634510883221)
  'NT' =>
  double(0.074634510883221)
  '我們' =>
  double(0.074634510883221)
  'window' =>
  double(0.074634510883221)
  'push' =>
  double(0.074634510883221)
  '建議' =>
  double(0.074634510883221)
  '鐵板' =>
  double(0.074634510883221)
  '蛋品' =>
  double(0.065014325813154)
}

```

Guzzle教學 : http://docs.guzzlephp.org/en/latest/index.html

Jieba教學 : https://github.com/fukuball/jieba-php

Jieba原理介紹 : https://speakerdeck.com/fukuball/jieba-jie-ba-zhong-wen-duan-ci






