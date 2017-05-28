<?php
/**
 * Created by PhpStorm.
 * User: bo
 * Date: 28/05/17
 * Time: 3:25 PM
 */

namespace Tests\Unit;


use App\Palindrome;
use Tests\TestCase;

class PalindromeTest extends TestCase
{
    protected $pal;

    public function setUp()
    {
        parent::setUp();
        $this->pal = new Palindrome();
    }

    /**
     * @dataProvider providerTestPalindrome
     */
    public function testPalindrome($str, $expected)
    {
        $actual = $this->pal->palindrome($str);

        $this->assertEquals($expected, $actual);
    }

    /**
     * Data provider for testPalindrome
     *
     * @return array
     */
    public function providerTestPalindrome()
    {
        return [
            ['emordnilaP','FALSE'],
            ['', 'UNDETERMINED'],
            ['Kayak', 'TRUE'],
            ['No lemon, no melon', 'TRUE']
        ];
    }
}