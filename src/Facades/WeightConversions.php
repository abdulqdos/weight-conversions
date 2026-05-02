<?php

namespace AbdulqdosAlabinie\WeightConversions\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AbdulqdosAlabinie\WeightConversions\WeightConversions
 */
class WeightConversions extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AbdulqdosAlabinie\WeightConversions\WeightConversions::class;
    }
}
