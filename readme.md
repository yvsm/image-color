## Image Color

获取图片看主要颜色，以方便根据颜色对图片进行分类排序
更多源码可访问  [http://www.wdphp.cn](http://www.wdphp.cn)


### Composer
~~~ bash
composer require zunyunkeji/image-color
~~~



## 使用示例

### Script
~~~ php
<?php
use zunyunkeji\imageColor\Image;

$img = new Image();
$img->load(__DIR__ . '/logo.jpg');
$info = $img->primaryColors();

print_r($info);
?>
~~~



### 返回数据
~~~ bash
Array
(
    [red] => 66316
    [white] => 10526
    [light-pink] => 373
    [light-red] => 325
    [light-gray] => 245
    [tan] => 30
    [dark-orange] => 26
    [pink] => 1
)
~~~
