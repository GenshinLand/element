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

use Genshin\Element\Reaction\None;
use Genshin\Element\Reaction\ReactionInterface;

/**
 * 土元素.
 */
class Geo extends Element
{
    public function react(ElementInterface $element): ReactionInterface
    {
        return new None();
    }

    public function toEnum(): Enum
    {
        return Enum::GEO;
    }

    public function isAttach(): bool
    {
        return true;
    }
}
