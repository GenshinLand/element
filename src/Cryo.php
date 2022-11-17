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

use Sworder\Element\Reaction\None;
use Sworder\Element\Reaction\ReactionInterface;

/**
 * 冰元素.
 */
class Cryo extends Element
{
    public function react(ElementInterface $element): ReactionInterface
    {
        return new None();
    }

    public function toEnum(): MainElement|VariantElement
    {
        return VariantElement::CRYO;
    }
}
