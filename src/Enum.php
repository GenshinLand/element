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

enum Enum: string
{
    // 风元素
    case ANEMO = 'Anemo';

    // 冰元素
    case CRYO = 'Cryo';

    // 草元素
    case DENDRO = 'Dendro';

    // 雷元素
    case ELECTRO = 'Electro';

    // 岩元素
    case GEO = 'Geo';

    // 水元素
    case HYDRO = 'Hydro';

    // 火元素
    case PYRO = 'Pyro';
}
