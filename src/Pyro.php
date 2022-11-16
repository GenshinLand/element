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
namespace Genshin\Element;

use Genshin\Element\Reaction\Increase;
use Genshin\Element\Reaction\None;
use Genshin\Element\Reaction\ReactionInterface;

/**
 * 火元素.
 */
class Pyro extends Element
{
    public function react(ElementInterface $element): ReactionInterface
    {
        return match ($element->toEnum()) {
            Enum::HYDRO => $this->reactHydro($element),
            default => new None()
        };
    }

    public function toEnum(): Enum
    {
        return Enum::PYRO;
    }

    public function reactHydro($element)
    {
        // 蒸发反应
        --$element->value;
        return new Increase(0.5);
    }
}
