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
     * @return float
     */
    abstract public static function compare(float $temperature): float;
}