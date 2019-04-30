<?php


namespace AntinDehoda\SortLibrary\Strategies;


class IncreaseSorter implements SortStrategyInterface
{

    public function sort( $array )
    {
        \sort($array);
        return $array;
    }
}