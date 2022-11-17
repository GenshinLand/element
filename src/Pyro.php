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

use Genshin\Element\Reaction\Consume;
use Genshin\Element\Reaction\Increase;
use Genshin\Element\Reaction\None;
use Genshin\Element\Reaction\ReactionInterface;
use Genshin\Element\Reaction\Union;

/**
 * 火元素.
 */
class Pyro extends Element
{
    public function react(ElementInterface $element): ReactionInterface
    {
        return match ($element->toEnum()) {
            MainElement::GOLD => new Union(new Increase(1.0), new Consume(5)),
            MainElement::GEO => new Union(new Increase(-0.5), new Consume(-5)),
            default => new None()
        };
    }

    public function toEnum(): MainElement|VariantElement
    {
        return MainElement::PYRO;
    }

    public function isAttach(): bool
    {
        return true;
    }

    /**
     * 蒸发.
     */
    protected function evaporation(ElementInterface $element)
    {
        $element->setValue($element->getValue() - 1);

        return new Increase(0.5);
    }
}
