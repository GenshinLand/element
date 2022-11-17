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

enum VariantElement: string implements ElementEnumInterface
{
    // 风元素
    case ANEMO = 'anemo';

    // 冰元素
    case CRYO = 'cryo';

    // 雷元素
    case ELECTRO = 'electro';

    public function make(int $value = 10): ElementInterface
    {
        return match ($this) {
            self::ANEMO => new Anemo($value),
            self::CRYO => new Cryo($value),
            self::ELECTRO => new Electro($value),
        };
    }
}
