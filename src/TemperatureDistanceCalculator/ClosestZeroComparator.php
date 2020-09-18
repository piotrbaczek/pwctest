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
     * @param int $temperature
     * @return int
     */
    public static function compare(float $temperature): int
    {
        return abs($temperature);
    }
}