<?php

/*
 * This file is part of the "sort-library" package.
 *
 * (c) Degoda Anton <dehoda@ukr.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AntinDehoda\SortLibrary;

use AntinDehoda\SortLibrary\Strategies\SortStrategyInterface;

class Sorter
{
    private $strategy;

    public function __construct(SortStrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }
    public function setStrategy(SortStrategyInterface $strategy): void{
        $this->strategy = $strategy;
    }
    public function sort(array $array): array{
        return $this->strategy->sort($array);
    }
}
