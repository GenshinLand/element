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

/**
 * 多级反应.
 */
class Union implements ReactionInterface
{
    public function __construct(public ?Increase $increase)
    {
    }
}
