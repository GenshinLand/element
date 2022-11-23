<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace HyperfTest\Cases;

use Sworder\Element\Cryo;

use function Sworder\Element\element_from;

/**
 * @internal
 * @coversNothing
 */
class ExampleTest extends AbstractTestCase
{
    public function testElementFrom()
    {
        $el = new Cryo();

        $el2 = element_from(json_decode(json_encode($el), true));

        $this->assertEquals($el, $el2);
    }
}
