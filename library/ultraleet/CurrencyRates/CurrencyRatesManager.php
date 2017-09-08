<?php

namespace Ultraleet\CurrencyRates;

use Ultraleet\CurrencyRates\Contracts\Factory;
use Ultraleet\CurrencyRates\Providers\DummyProvider;
use Illuminate\Support\Manager;
use InvalidArgumentException;

class CurrencyRatesManager extends Manager implements Factory
{

    /**
     * Create an instance of the specified driver.
     *
     * @return \Laravel\Socialite\One\AbstractProvider
     */
    protected function createDummyDriver()
    {
        return new DummyProvider($this->app['request']);
    }

    /**
     * Get the default driver name.
     *
     * @throws \InvalidArgumentException
     *
     * @return string
     */
    public function getDefaultDriver()
    {
        throw new InvalidArgumentException('No CurrencyRates API driver was specified.');
    }
}