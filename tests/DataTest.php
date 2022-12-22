<?php

require_once 'src/lw4.php';

use PHPUnit\Framework\TestCase;

class DateTest extends TestCase
{
    private $date;
    protected function setUp(): void
    {
        $this->date = new Date(1, 2, 2001);
    }
    public function testPow(): void
    {
        $date2 = new Date(1, 4, 2001);
        $this->assertEquals($this->date->diffDay($date2), 62);
    }
    public function testMinus(): void
    {
        $this->assertEquals($this->date->minusDay(4), '24.5.2003');
    }
    public function testDayOfWeek(): void
    {
        $this->assertEquals($this->date->getDateOfWeek(), 'Tuesday');
    }
    public function testFormat(): void
    {
        $this->assertEquals($this->date->format('ru'), '28.1.2001');
    }
}
