<?php

include __DIR__ . '/../vendor/autoload.php';

use pbaczek\pwctest\TemperatureDistanceCalculator\ClosestZeroComparator;
use pbaczek\pwctest\TemperaturesDistanceCalculator;

try {
    $data = @file_get_contents(__DIR__ . '/../data/data.txt');

    if ($data === false) {
        throw new RuntimeException('No file.');
    }

    $temperatures = explode("\r\n", $data);

    $weatherIterator = new TemperaturesDistanceCalculator($temperatures, new ClosestZeroComparator());
    $weatherIterator->run();

    echo sprintf('The result is %f, occured %u times.', $weatherIterator->getDistance(), $weatherIterator->getCountOccurrences());
} catch (Throwable $exception) {
    echo sprintf('Exception: %s', $exception->getMessage());
}