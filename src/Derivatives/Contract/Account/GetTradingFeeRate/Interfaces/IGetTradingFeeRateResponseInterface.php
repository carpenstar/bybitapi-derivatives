<?php

namespace Carpenstar\ByBitAPI\Derivatives\Contract\Account\GetTradingFeeRate\Interfaces;

interface IGetTradingFeeRateResponseInterface
{
    /**
     * @return IGetTradingFeeRateResponseItemInterface[]
     */
    public function getFeeRates(): array;
}
