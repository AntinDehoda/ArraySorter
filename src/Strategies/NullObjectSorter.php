<?php


namespace AntinDehoda\SortLibrary\Strategies;


class NullObjectSorter implements SortStrategyInterface
{

    public function sort(array $array)
    {
        // Do nothing.

        return $array;
    }
}