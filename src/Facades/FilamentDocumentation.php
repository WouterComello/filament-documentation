<?php

namespace WouterComello\FilamentDocumentation\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \WouterComello\FilamentDocumentation\FilamentDocumentation
 */
class FilamentDocumentation extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'filament-documentation';
    }
}
