<?php

use pbaczek\pwctest\TemperatureDistanceCalculator\ClosestZeroComparator;
use pbaczek\pwctest\TemperaturesDistanceCalculator;

include __DIR__ . '/../vendor/autoload.php';

$data = file_get_contents(__DIR__ . '/../data/data.txt');

$temperatures = explode("\r\n", $data);

$weatherIterator = new TemperaturesDistanceCalculator($temperatures, new ClosestZeroComparator());
$weatherIterator->run();

echo sprintf('The result is %f, occured %u times.', $weatherIterator->getDistance(), $weatherIterator->getCountOccurances());