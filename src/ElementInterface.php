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

use Genshin\Element\Reaction\ReactionInterface;

interface ElementInterface
{
    public function react(ElementInterface $element): ReactionInterface;

    public function toEnum(): Enum;

    public function getValue(): int;
}
