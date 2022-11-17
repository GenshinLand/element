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
namespace Sworder\Element;

enum MainElement: string implements ElementEnumInterface
{
    // 金元素
    case GOLD = 'Gold';

    // 木元素
    case DENDRO = 'Dendro';

    // 水元素
    case HYDRO = 'Hydro';

    // 火元素
    case PYRO = 'Pyro';

    // 土元素
    case GEO = 'Geo';

    public function make(int $value = 10): ElementInterface
    {
        return match ($this) {
            self::GOLD => new Gold($value),
            self::DENDRO => new Dendro($value),
            self::HYDRO => new Hydro($value),
            self::PYRO => new Pyro($value),
            self::GEO => new Geo($value),
        };
    }
}
