<?php

namespace AlexBabintsev\ShadcnBlade\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AlexBabintsev\ShadcnBlade\ShadcnBlade
 */
class ShadcnBlade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AlexBabintsev\ShadcnBlade\ShadcnBlade::class;
    }
}
