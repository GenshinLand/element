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

/**
 * 增幅反应.
 */
class Increase implements ReactionInterface, IncreaseInterface
{
    public function __construct(public float $value)
    {
    }

    public function increase(): float
    {
        return $this->value;
    }
}
