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
 * 水元素.
 */
class Hydro extends Element
{
    public function react(ElementInterface $element): ReactionInterface
    {
        return match ($element->toEnum()) {
            Enum::PYRO => $this->evaporation($element),
            default => new None()
        };
    }

    public function toEnum(): Enum
    {
        return Enum::HYDRO;
    }

    /**
     * 蒸发.
     */
    protected function evaporation(Hydro $element)
    {
        $element->setValue($element->getValue() - 5);

        return new Increase(1.0);
    }
}
