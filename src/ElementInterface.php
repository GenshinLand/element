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
    /**
     * 反应.
     */
    public function react(ElementInterface $element): ReactionInterface;

    public function toEnum(): MainElement|VariantElement;

    /**
     * 读取剩余附着值
     */
    public function getValue(): int;

    /**
     * 设置当前附着值
     */
    public function setValue(int $value): void;

    /**
     * 是否允许被附着
     */
    public function isAttach(): bool;
}
