<?php
/**
 * Created by PhpStorm.
 * User: bo
 * Date: 28/05/17
 * Time: 4:09 PM
 */

namespace Tests\Unit;


use Tests\TestCase;
use App\Instagram;

class InstagramTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->inst = new Instagram();
    }

    /**
     * @dataProvider providerTestInstagram
     */
    public function testInstagram($q, $expected)
    {
        $actual = $this->inst->instagram($q);
        $this->assertEquals($expected, $actual);
    }

    /**
     * @dataProvider providerTestInstagram
     */
    public function testInstagram2($q, $expected)
    {
        $actual = $this->inst->instagram2($q);
        $this->assertEquals($expected, $actual);
    }

    public function testSame()
    {
        $arr = [0,0,0,0,0,0];
        $this->assertTrue($this->inst->same($arr));

        $arr = [0,0,1,0,1,0];
        $this->assertFalse($this->inst->same($arr));
    }

    /**
     * Data provider for testInstagram
     * @return array
     */
    public function providerTestInstagram()
    {
        return [
            ['uncopyrightable', 'HETEROGRAM'],
            ['Caucasus', 'ISOGRAM'],
            ['authorising', 'NOTAGRAM']
        ];
    }
}