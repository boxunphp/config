<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 2019/12/5
 * Time: 6:06 PM
 */

namespace ConfigTest;

use All\Config\Config;
use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase
{
    private $config;

    protected function setUp()
    {
        $this->config = Config::getInstance();
        $this->config->setPath(__DIR__);
    }

    public function testGet()
    {
        $this->assertEquals($this->config->get('config.master.host'), '127.0.0.1');
    }
}