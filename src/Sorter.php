<?php


namespace AntinDehoda\SortLibrary;

use AntinDehoda\SortLibrary\Strategies\SortStrategyInterface;

class Sorter
{
    private $strategy;

    public function __construct(SortStrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function getStrategy()
    {
        return $this->strategy;
    }

    public function setStrategy( SortStrategyInterface $strategy): void
    {
        $this->strategy = $strategy;
    }
    public function sort ( array $array ) {
       return $this->strategy->sort( $array );

    }
}