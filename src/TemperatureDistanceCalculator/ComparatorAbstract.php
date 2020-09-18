<?php

namespace pbaczek\pwctest\TemperatureDistanceCalculator;

/**
 * Class ComparatorAbstract
 * @package pbaczek\pwctest\TemperatureDistanceCalculator
 */
abstract class ComparatorAbstract
{
    /**
     * Function comparing the temperature to
     * @param float $temperature
     * @return int
     */
    abstract public static function compare(float $temperature): int;
}