<?php


namespace AntinDehoda\SortLibrary\Strategies;


class DecreaseSorter implements SortStrategyInterface
{

    public function sort($array)
    {
        \rsort($array);
        return $array;
    }
}