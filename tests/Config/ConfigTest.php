<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 2019/12/5
 * Time: 6:06 PM
 */

namespace Tests\Config;

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
        $this->assertEquals(['master' => ['host' => '127.0.0.1']], $this->config->get('config'), '127.0.0.1');
        $this->assertEquals('127.0.0.1', $this->config->get('config.master.host'));
    }
}