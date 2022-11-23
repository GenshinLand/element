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

function element_from(array $data): ?ElementInterface
{
    $enum = MainElement::tryFrom($data['enum']);

    if (! $enum) {
        $enum = VariantElement::tryFrom($data['enum']);
    }

    return $enum?->make($data['value']);
}
