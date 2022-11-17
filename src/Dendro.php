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

use Sworder\Element\Reaction\Consume;
use Sworder\Element\Reaction\Increase;
use Sworder\Element\Reaction\None;
use Sworder\Element\Reaction\ReactionInterface;
use Sworder\Element\Reaction\Union;

/**
 * 木元素.
 */
class Dendro extends Element
{
    public function react(ElementInterface $element): ReactionInterface
    {
        return match ($element->toEnum()) {
            MainElement::GEO => new Union(new Increase(1.0), new Consume(5)),
            MainElement::PYRO => new Union(new Increase(-0.5), new Consume(-5)),
            default => new None()
        };
    }

    public function toEnum(): MainElement|VariantElement
    {
        return MainElement::DENDRO;
    }

    public function isAttach(): bool
    {
        return true;
    }
}
