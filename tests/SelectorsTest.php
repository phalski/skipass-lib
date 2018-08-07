<?php

namespace Phalski\Skipass\Model;


class SelectorsTest extends \PHPUnit\Framework\TestCase
{
    protected static $sourceAcclistDe;
    protected static $sourceAcclistEn;
    protected static $sourceDetail0De;
    protected static $sourceDetail0En;
    protected static $sourceDetail21De;
    protected static $sourceDetail21En;

    protected $selectors;

    public static function setUpBeforeClass()/* The :void return type declaration that should be here would cause a BC issue */
    {
        parent::setUpBeforeClass();
        self::$sourceAcclistDe = file_get_contents(__DIR__ . '/resources/27-154-23712_golm-de-acclist.html');
        self::$sourceAcclistEn = file_get_contents(__DIR__ . '/resources/27-154-23712_golm-en-acclist.html');
        self::$sourceDetail0De = file_get_contents(__DIR__ . '/resources/27-154-23712_golm-de-detail_0.html');
        self::$sourceDetail0En = file_get_contents(__DIR__ . '/resources/27-154-23712_golm-en-detail_0.html');
        self::$sourceDetail21De = file_get_contents(__DIR__ . '/resources/27-154-23712_golm-de-detail_21.html');
        self::$sourceDetail21En = file_get_contents(__DIR__ . '/resources/27-154-23712_golm-en-detail_21.html');
    }


    protected function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
        $this->selectors = new Selectors();

    }

    public function testDayCount()
    {
        $this->assertEquals(33, $this->selectors->dayCount(self::$sourceAcclistDe));
        $this->assertEquals(33, $this->selectors->dayCount(self::$sourceAcclistEn));
    }

    public function testDetail0() {
        var_dump($this->selectors->detail(self::$sourceDetail21De));
    }
}
