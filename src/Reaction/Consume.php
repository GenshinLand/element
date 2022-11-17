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
namespace Sworder\Element\Reaction;

class Consume implements ReactionInterface, ConsumeInterface
{
    public function __construct(public int $value)
    {
    }

    public function consume(): int
    {
        return $this->value;
    }
}
