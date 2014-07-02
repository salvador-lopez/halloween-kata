<?php

namespace Test;

use Kata\ChocolateCutter;

/**
 * Class ChocolateCutterTest
 */
class ChocolateCutterTest extends \PHPUnit_Framework_TestCase
{

    /** @var  ChocolateCutter */
    private $chocolateCutter;

    protected function setUp()
    {
        $this->chocolateCutter = new ChocolateCutter();
    }

    protected function tearDown()
    {
        unset($this->chocolateCutter);
    }

    /**
     * @test
     */
    public function shouldReturnZeroWhenReceiveZeroCuts()
    {
        $this->assertSame(0, $this->chocolateCutter->cut(0));
    }

    /**
     * @test
     */
    public function shouldReturnZeroWhenReceiveOneCut()
    {
        $this->assertSame(0, $this->chocolateCutter->cut(0));
    }

    /**
     * @test
     */
    public function shouldReturnOneWhenReceive2Cut()
    {
        $this->assertSame(1, $this->chocolateCutter->cut(2));
    }

//    /**
//     * @test
//     */
//    public function shouldReturnTwoWhenReceive3Cuts()
//    {
//        $this->assertSame(2, $this->chocolateCutter->cut(3));
//    }

    /**
     * @test
     */
    public function shouldReturn4WhenReceive4Cuts()
    {
        $this->assertSame(4, $this->chocolateCutter->cut(4));
    }

//    /**
//     * @test
//     */
//    public function shouldReturn6WhenReceive5Cuts()
//    {
//        $this->assertSame(6, $this->chocolateCutter->cut(5));
//    }
}