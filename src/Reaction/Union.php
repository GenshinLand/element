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
namespace Genshin\Element\Reaction;

use Genshin\Element\MainElement;

/**
 * 多级反应.
 */
class Union implements ReactionInterface, IncreaseInterface, ConsumeInterface, TransformInterface
{
    public function __construct(
        public ?Increase $increase,
        public ?Consume $consume,
        public ?Transform $transform,
    ) {
    }

    public function increase(): float
    {
        return $this->increase?->increase() ?? 0;
    }

    public function consume(): int
    {
        return $this->consume?->consume() ?? 0;
    }

    public function transform(): ?MainElement
    {
        return $this->transform?->transform();
    }
}
