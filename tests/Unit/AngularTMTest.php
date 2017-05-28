<?php
/**
 * Created by PhpStorm.
 * User: bo
 * Date: 28/05/17
 * Time: 4:53 PM
 */

namespace Tests\Unit;


use Tests\TestCase;
use App\AngularTM;

class AngularTMTest extends TestCase
{
    /**
     * @dataProvider providerTestDegrees
     */
    public function testDegrees($q, $expected)
    {
        $angular = new AngularTM();
        $degrees = $angular->degrees($q);
        $this->assertEquals($expected, $degrees);
    }

    /**
     * Data provider for testDegrees
     *
     * @return array
     */
    public function providerTestDegrees()
    {
        return [
            ['12:00:00', '0 degrees'],
            ['12:15:00', '82.5 degrees'],
            ['11:40', '110 degrees']
        ];
    }
}