<?php

declare(strict_types=1);

namespace ChristianBrown\MetOffice\DataPoint\Forecast\Transformer;

use ChristianBrown\MetOffice\DataPoint\Enums\WeatherType;

final class WeatherTypeTransformer implements WeatherTypeTransformerInterface
{
    public function transform(WeatherType $weatherType): ?string
    {
        $type = null;
        if (!empty(self::WEATHER_TYPE_NAMES[$weatherType->value])) {
            $type = self::WEATHER_TYPE_NAMES[$weatherType->value];
        }

        return $type;
    }
}
