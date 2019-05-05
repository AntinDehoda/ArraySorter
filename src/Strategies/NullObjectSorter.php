<?php

namespace AntinDehoda\SortLibrary\Strategies;

class NullObjectSorter implements SortStrategyInterface
{
    public function sort(array $array)
    {
        // Return original array.

        return $array;
    }
}
