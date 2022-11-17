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

class Transform implements ReactionInterface, TransformInterface
{
    public function __construct(public ?MainElement $element = null)
    {
    }

    public function transform(): ?MainElement
    {
        return $this->element;
    }
}
