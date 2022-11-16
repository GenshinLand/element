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
    case ANEMO = 'Anemo';
    case CRYO = 'Cryo';
    case DENDRO = 'Dendro';
    case ELECTRO = 'Electro';
    case GEO = 'Geo';
    case HYDRO = 'Hydro';
    case PYRO = 'Pyro';
}
