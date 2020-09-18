<?php

namespace pbaczek\pwctest\TemperatureDistanceCalculator;

/**
 * Class ClosestZeroComparator
 * @package pbaczek\pwctest\TemperatureDistanceCalculator
 */
class ClosestZeroComparator extends ComparatorAbstract
{
    /**
     * @inheritDoc
     * @param float $temperature
     * @return float
     */
    public static function compare(float $temperature): float
    {
        return abs($temperature);
    }
}