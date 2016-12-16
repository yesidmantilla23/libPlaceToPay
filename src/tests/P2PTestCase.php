<?php

namespace ymantillar\PlaceToPay\tests;

class P2PTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @var array
     */
    protected static $config;

    /**
     * @before
     */
    public function setUp()
    {
        if (!self::$config) {
            self::$config = require_once __DIR__.'/fixtures/main.php';
        }

        parent::setUp();
    }
}
