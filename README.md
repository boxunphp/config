# php-config
PHP 配置类

## Usage

```php
<?php
$config = Config::getInstance();
$config->setPath('./');

$data = $config->get('path1/filename.level1.level2');
```