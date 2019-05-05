<?php

/*
 * This file is part of the "sort-library" package.
 *
 * (c) Degoda Anton <dehoda@ukr.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AntinDehoda\SortLibrary\Strategies;

class DecreaseSorter implements SortStrategyInterface
{
    public function sort(array $array): array
    {
        \rsort($array);

        return $array;
    }
}
