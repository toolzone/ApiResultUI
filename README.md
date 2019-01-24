# ApiResultUI

### 主要功能：

+ 根据接口注释自动生成接口文档

### 开源地址：

[【GigHub:】https://github.com/toolzone/ApiResultUI](https://github.com/toolzone/ApiResultUI)
    
### 扩展安装：

+ 方法一：composer命令 `composer require ApiResultUI`

+ 方法二：直接下载压缩包，然后进入项目中执行 composer命令 `composer update` 来生成自动加载文件

### 引用扩展：

+ 当你的项目不支持composer自动加载时，可以使用以下方式来引用该扩展包

```
// 引入扩展（具体路径请根据你的目录结构自行修改）
require_once __DIR__ . '/vendor/autoload.php';
```

### 使用扩展：

```
// 引入扩展（具体路径请根据你的目录结构自行修改）
require_once __DIR__ . '/../vendor/autoload.php';
// 加载测试API类1
require_once __DIR__ . '/test1.php';
// 加载测试API类2
require_once __DIR__ . '/test2.php'; 
$config = [
    'class'         => ['Test1', 'Test2'], // 要生成文档的类
    'filter_method' => ['__construct'], // 要过滤的方法名称
];
$api = new \ApiResult\BootstrapApiResult($config);
$doc = $api->getHtml();
exit($doc);
```
### 具体效果可运行test目录下的`index.php`查看
