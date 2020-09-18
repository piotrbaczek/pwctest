<?php

namespace pbaczek\pwctest;

use pbaczek\pwctest\TemperatureDistanceCalculator\ComparatorAbstract;

/**
 * Class TemperatureDistanceCalculator
 * @package pbaczek\pwctest
 */
class TemperaturesDistanceCalculator
{
    /** @var array $temperatures */
    private $temperatures;

    /** @var int $countOccurances */
    private $countOccurrences = 0;

    /** @var int $distance */
    private $distance = PHP_INT_MAX;

    /** @var ComparatorAbstract $comparatorAbstract */
    private $comparatorAbstract;

    /**
     * TemperatureDistanceCalculator constructor.
     * @param array $temperatures
     * @param ComparatorAbstract $comparatorAbstract
     */
    public function __construct(array $temperatures, ComparatorAbstract $comparatorAbstract)
    {
        $this->temperatures = $temperatures;
        $this->comparatorAbstract = $comparatorAbstract;
    }

    /**
     * Run comparison
     * @return void
     */
    public function run(): void
    {
        foreach ($this->temperatures as $temperature) {

            if ($this->validate($temperature) === false) {
                continue;
            }

            $temperatureDistance = $this->comparatorAbstract::compare($temperature);

            if ($temperatureDistance > $this->distance) {
                continue;
            }

            if ($temperatureDistance < $this->distance) {
                $this->distance = $temperatureDistance;
                $this->countOccurrences = 1;
                continue;
            }

            if ($temperatureDistance === $this->distance) {
                $this->countOccurrences++;
            }
        }
    }

    /**
     * Validate temperature is numeric
     * @param $temperature
     * @return bool
     */
    private function validate($temperature)
    {
        return is_numeric($temperature);
    }

    /**
     * @return int
     */
    public function getCountOccurrences(): int
    {
        return $this->countOccurrences;
    }

    /**
     * @return int
     */
    public function getDistance(): int
    {
        return $this->distance;
    }
}