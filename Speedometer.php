<?php

class Speedometer
{
    public const MILES = 0.621;
    public const KM = 1.609;

    public static function convertKmToMiles(int $km): float
    {
        return self::MILES * $km;
    }

    public static function convertMilesToKm(float $miles): float
    {
        return self::KM * $miles;
    }
}
